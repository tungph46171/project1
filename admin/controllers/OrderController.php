<?php

function orderListAll()
{
    $title      = 'Danh sách đơn hàng';
    $view       = 'orders/index';
    $script     = 'datatable';
    $script2    = 'orders/script';
    $style      = 'datatable';

    $orders = listAllForOrder();

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function orderShowOne($id)
{
    $order = showOneForOrder($id);

    if (empty($order)) {
        e404();
    }

    $title  = 'Chi tiết Đơn hàng mã số : ' . $order['p_id'];
    $view   = 'orders/show';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}


function orderUpdate($id)
{
    $order = showOneForOrder($id);

    if (empty($order)) {
        e404();
    }

    $title      = 'Cập nhật Đơn hàng mã số : ' . $order['p_id'];
    $view       = 'orders/update';
    $script     = 'datatable';
    $script2    = 'orders/script';

    // $categories     = listAll('categories');
    // $authors        = listAll('authors');
    // $tags           = listAll('tags');


    if (!empty($_POST)) {
        $data = [
            'user_id'           => $_POST['user_id']            ?? $order['p_user_id'],
            'user_name'         => $_POST['user_name']          ?? $order['p_user_name'],
            'user_email'        => $_POST['user_email']         ?? $order['p_user_email'],
            'user_phone'        => $_POST['user_phone']         ?? $order['p_user_phone'],
            'user_address'      => $_POST['user_address']       ?? $order['p_user_address'],
            'total_bill'        => $_POST['total_bill']         ?? $order['p_total_bill'],
            'status_delivery'   => $_POST['status_delivery']    ?? $order['p_status_delivery'],
            'status_payment'    => $_POST['status_payment']     ?? $order['p_status_payment'],
            'updated_at'        => date('Y-m-d H:i:s')
        ];

        validateOrderUpdate($id, $data);

        try {
            $GLOBALS['conn']->beginTransaction();

            update('orders', $id, $data);

            // Xử lý lưu Post - Tags

            // deleteTagsByPostID($id);
            
            // if (!empty($_POST['tags'])) {
            //     foreach ($_POST['tags'] as $tagID) {
            //         insert('post_tag', [
            //             'post_id' => $id,
            //             'tag_id' => $tagID,
            //         ]);
            //     }
            // }

            $GLOBALS['conn']->commit();
        } catch (Exception $e) {
            $GLOBALS['conn']->rollBack();

            debug($e);
        }

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=order-update&id=' . $id);
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validateOrderUpdate($id, $data)
{
    $errors = [];

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        
        header('Location: ' . BASE_URL_ADMIN . '?act=order-update&id=' . $id);
        exit();
    }
}

function orderDelete($id)
{
    $order = showOne('orders', $id);

    if (empty($order)) {
        e404();
    }

    try {
        $GLOBALS['conn']->beginTransaction();


        delete2('orders', $id);

        $GLOBALS['conn']->commit();
    } catch (Exception $e) {
        $GLOBALS['conn']->rollBack();

        debug($e);
    }


    $_SESSION['success'] = 'Thao tác thành công!';

    header('Location: ' . BASE_URL_ADMIN . '?act=orders');
    exit();
}
