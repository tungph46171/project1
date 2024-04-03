<?php

function productListAll()
{
    $title      = 'Danh sách product';
    $view       = 'products/index';
    $script     = 'datatable';
    $script2    = 'products/script';
    $style      = 'datatable';

    $products = listAllForProduct();

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function productShowOne($id)
{
    $product = showOneForProduct($id);

    if (empty($product)) {
        e404();
    }

    $title  = 'Chi tiết product: ' . $product['p_name'];
    $view   = 'products/show';

    $tags = getTagsForProduct($id);

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function productCreate()
{
    $title      = 'Thêm mới product';
    $view       = 'products/create';
    $script     = 'datatable';
    $script2    = 'products/script';

    $categories = listAll('categories');
    // $authors    = listAll('authors');
    $tags       = listAll('tags');


    // cần sửa lại

    if (!empty($_POST)) {

        $data = [
            'name'         => $_POST['name']          ?? null,
            'gender'   => $_POST['gender']    ?? 0,
            'origin'       => $_POST['origin']        ?? null,
            'description'       => $_POST['description'] ,
            'diameter'       => $_POST['diameter']        ?? null,
            'thickness'       => $_POST['thickness']        ?? null,
            'price'       => $_POST['price']        ?? null,
            'price_sale'       => $_POST['price_sale'] ,

            'size_id'     => $_POST['size_id']      ?? null,
            'glass_id'     => $_POST['glass_id']      ?? null,
            'warranty_id'     => $_POST['warranty_id']      ?? null,
            'strap_id'     => $_POST['strap_id']      ?? null,
            'color_id'     => $_POST['color_id']      ?? null,
            'brand_id'     => $_POST['brand_id']      ?? null,
            'tag_id'     => $_POST['tag_id']      ?? null,
            'category_id'   => $_POST['category_id']    ?? null,
            
            'img'  => get_file_upload('img')    ?? null,
        ];

        validateProductCreate($data);

        $img = $data['img'];
        if (is_array($img)) {
            $data['img'] = upload_file($img, 'uploads/products/');
        }

        try {
            $GLOBALS['conn']->beginTransaction();

            $productID = insert_get_last_id('products', $data);

            // Xử lý lưu Product - Tags
            if (!empty($_POST['tags'])) {
                foreach ($_POST['tags'] as $tagID) {
                    insert('product_tag', [
                        'product_id' => $productID,
                        'tag_id' => $tagID,
                    ]);
                }
            }

            $GLOBALS['conn']->commit();
        } catch (Exception $e) {
            $GLOBALS['conn']->rollBack();

            if (is_array($img) 
                && !empty($data['img'])
                && file_exists(PATH_UPLOAD . $data['img'])) {
                unlink(PATH_UPLOAD . $data['img']);
            }

            debug($e);
        }

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=products');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateProductCreate($data)
{
    $errors = [];

    if (empty($data['img'])) {
        $errors[] = 'Trường img là bắt buộc';
    }
    elseif (is_array($data['img'])) {
        $typeImage = ['image/png', 'image/jpg', 'image/jpeg'];

        if ($data['img_']['size'] > 2 * 1024 * 1024) {
            $errors[] = 'Trường img_ có dung lượng nhỏ hơn 2M';
        } 
        else if (!in_array($data['img']['type'], $typeImage)) {
            $errors[] = 'Trường img chỉ chấp nhận định dạng file: png, jpg, jpeg';
        }
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['data'] = $data;

        header('Location: ' . BASE_URL_ADMIN . '?act=product-create');
        exit();
    }
}

function productUpdate($id)
{
    $post = showOneForProduct($id);

    if (empty($product)) {
        e404();
    }

    $title      = 'Cập nhật product: ' . $product['p_name'];
    $view       = 'products/update';
    $script     = 'datatable';
    $script2    = 'products/script';

    $categories     = listAll('categories');
    // $authors        = listAll('authors');
    $tags           = listAll('tags');

    $tagsForProduct    = getTagsForProduct($id);
    $tagIDsForProduct  = array_column($tagsForProduct, 't_id');


    // cần sửa lại
    if (!empty($_POST)) {
        $data = [
            'name'         => $_POST['name']  ?? $post['p_title'] ,
            'gender'   => $_POST['gender']   ?? $post['p_gender'] ,
            'origin'       => $_POST['origin'] ?? $post['p_origin'] ,
            'description'       => $_POST['description'] ?? $post['p_description'] ,
            'diameter'       => $_POST['diameter'] ?? $post['p_diameter'] ,
            'thickness'       => $_POST['thickness'] ?? $post['p_thickness'] ,
            'price'       => $_POST['price'] ?? $post['p_price'] ,
            'price_sale'       => $_POST['price_sale'] ?? $post['p_price_sale'] ,

            'size_id'     => $_POST['size_id'] ?? $post['p_size_id'] ,
            'glass_id'     => $_POST['glass_id'] ?? $post['p_glass_id'] ,
            'warranty_id'     => $_POST['warranty_id'] ?? $post['p_warranty_id'] ,
            'strap_id'     => $_POST['strap_id'] ?? $post['p_strap_id'] ,
            'color_id'     => $_POST['color_id'] ?? $post['p_color_id'] ,
            'brand_id'     => $_POST['brand_id'] ?? $post['p_brand_id'] ,
            'tag_id'     => $_POST['tag_id'] ?? $post['p_tag_id'] ,
            'category_id'   => $_POST['category_id'] ?? $post['p_category_id'] ,
            
            'img'  => get_file_upload('img', $product['p_img']),
        ];

        validatePostUpdate($id, $data);

        $img = $data['img'];
        if (is_array($img)) {
            $data['img'] = upload_file($img, 'uploads/products/');
        }

        try {
            $GLOBALS['conn']->beginTransaction();

            update('products', $id, $data);

            // Xử lý lưu Product - Tags

            deleteTagsByProductID($id);
            
            if (!empty($_POST['tags'])) {
                foreach ($_POST['tags'] as $tagID) {
                    insert('product_tag', [
                        'product_id' => $id,
                        'tag_id' => $tagID,
                    ]);
                }
            }

            $GLOBALS['conn']->commit();
        } catch (Exception $e) {
            $GLOBALS['conn']->rollBack();

            if (is_array($img) 
                && !empty($data['img'])
                && file_exists(PATH_UPLOAD . $data['img'])) {
                unlink(PATH_UPLOAD . $data['img']);
            }

            debug($e);
        }

        if (
            !empty($img)
            && !empty($product['img'])
            && !empty($data['img'])
            && file_exists(PATH_UPLOAD . $product['img'])
        ) {
            unlink(PATH_UPLOAD . $product['img']);
        }

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=product-update&id=' . $id);
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateProductUpdate($id, $data)
{
    $errors = [];

    if (empty($data['img'])) {
        $errors[] = 'Trường img là bắt buộc';
    }
    elseif (is_array($data['img'])) {
        $typeImage = ['image/png', 'image/jpg', 'image/jpeg'];

        if ($data['img']['size'] > 2 * 1024 * 1024) {
            $errors[] = 'Trường img có dung lượng nhỏ hơn 2M';
        } 
        else if (!in_array($data['img']['type'], $typeImage)) {
            $errors[] = 'Trường img chỉ chấp nhận định dạng file: png, jpg, jpeg';
        }
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        
        header('Location: ' . BASE_URL_ADMIN . '?act=product-update&id=' . $id);
        exit();
    }
}

function productDelete($id)
{
    $product = showOne('products', $id);

    if (empty($product)) {
        e404();
    }

    try {
        $GLOBALS['conn']->beginTransaction();

        deleteTagsByProductID($id);

        delete2('products', $id);

        $GLOBALS['conn']->commit();
    } catch (Exception $e) {
        $GLOBALS['conn']->rollBack();

        debug($e);
    }

    if (
        !empty($product['img'])
        && file_exists(PATH_UPLOAD . $product['img'])
    ) {
        unlink(PATH_UPLOAD . $product['img']);
    }

    $_SESSION['success'] = 'Thao tác thành công!';

    header('Location: ' . BASE_URL_ADMIN . '?act=products');
    exit();
}
