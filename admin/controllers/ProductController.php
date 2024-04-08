<?php

function productListAll()
{
    $title      = 'Danh sách sản phẩm';
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

    $title  = 'Chi tiết sản phẩm: ' . $product['p_name'];
    $view   = 'products/show';

    $tags = getTagsForProduct($id);

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function productCreate()
{
    $title      = 'Thêm mới sản phẩm';
    $view       = 'products/create';
    $script     = 'datatable';
    $script2    = 'products/script';

    $sizes    = listAll('sizes');
    $glasses    = listAll('glasses');
    $warranties = listAll('warranties');
    $straps = listAll('straps');
    $colors = listAll('colors');
    $brands    = listAll('brands');
    $tags       = listAll('tags');                
    $categories = listAll('categories');



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

            // // Xử lý lưu Product - Tags
            // if (!empty($_POST['tags'])) {
            //     foreach ($_POST['tags'] as $tagID) {
            //         insert('product_tag', [
            //             'product_id' => $productID,
            //             'tag_id' => $tagID,
            //         ]);
            //     }
            // }

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

        if ($data['img']['size'] > 2 * 1024 * 1024) {
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
    $product = showOneForProduct($id);

    if (empty($product)) {
        e404();
    }

    $title      = 'Cập nhật sản phẩm: ' . $product['p_name'];
    $view       = 'products/update';
    $script     = 'datatable';
    $script2    = 'products/script';

    $sizes    = listAll('sizes');
    $glasses    = listAll('glasses');
    $warranties = listAll('warranties');
    $straps = listAll('straps');
    $colors = listAll('colors');
    $brands    = listAll('brands');
    $tags       = listAll('tags');                
    $categories = listAll('categories');

    $tagsForProduct    = getTagsForProduct($id);
    $tagIDsForProduct  = array_column($tagsForProduct, 'tag_id');


    if (!empty($_POST)) {
        $data = [
            'name'         => $_POST['name']  ?? $product['p_title'] ,
            'gender'   => $_POST['gender']   ?? $product['p_gender'] ,
            'origin'       => $_POST['origin'] ?? $product['p_origin'] ,
            'description'       => $_POST['description'] ?? $product['p_description'] ,
            'diameter'       => $_POST['diameter'] ?? $product['p_diameter'] ,
            'thickness'       => $_POST['thickness'] ?? $product['p_thickness'] ,
            'price'       => $_POST['price'] ?? $product['p_price'] ,
            'price_sale'       => $_POST['price_sale'] ?? $product['p_price_sale'] ,

            'size_id'     => $_POST['size_id'] ?? $product['p_size_id'] ,
            'glass_id'     => $_POST['glass_id'] ?? $product['p_glass_id'] ,
            'warranty_id'     => $_POST['warranty_id'] ?? $product['p_warranty_id'] ,
            'strap_id'     => $_POST['strap_id'] ?? $product['p_strap_id'] ,
            'color_id'     => $_POST['color_id'] ?? $product['p_color_id'] ,
            'brand_id'     => $_POST['brand_id'] ?? $product['p_brand_id'] ,
            'tag_id'     => $_POST['tag_id'] ?? $product['p_tag_id'] ,
            'category_id'   => $_POST['category_id'] ?? $product['p_category_id'] ,
            
            'img'  => get_file_upload('img', $product['p_img']),
        ];

        validateProductUpdate($id, $data);

        $img = $data['img'];
        if (is_array($img)) {
            $data['img'] = upload_file($img, 'uploads/products/');
        }

        try {
            $GLOBALS['conn']->beginTransaction();

            update('products', $id, $data);

            // Xử lý lưu Product - Tags

            // deleteTagsByProductID($id);
            
            // if (!empty($_POST['tags'])) {
            //     foreach ($_POST['tags'] as $tagID) {
            //         insert('product_tag', [
            //             'product_id' => $id,
            //             'tag_id' => $tagID,
            //         ]);
            //     }
            // }

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

        // deleteTagsByProductID($id); 

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



function get_related_products($category_id)
{
    global $con;
    $query = "select * from products where category_id = '$category_id' order by id desc";
    return $result = mysqli_query($con, $query);
}

// function get_products($category_id = '', $product_id = '')
// {
//     global $con;
//     $query = "select * from products order by id desc";
//     if ($category_id != '') {
//         $query = "select * from products where category_id = '$category_id'";
//     }

//     if ($product_id != '') {
//         $query = "select * from products where id = '$product_id' ";
//     }
//     return $result = mysqli_query($con, $query);
// }