<?php 

if (!function_exists('listAllForOrder')) {
    function listAllForOrder() {
        try {
            $sql = "
                SELECT 
                    p.id                    as p_id,
                    p.user_id               as p_user_id,
                    p.user_name             as p_user_name,
                    p.user_email            as p_user_email,
                    p.user_phone            as p_user_phone,
                    p.user_address          as p_user_address,
                    p.total_bill            as p_total_bill,
                    p.status_delivery       as p_status_delivery,
                    p.status_payment        as p_status_payment,
                    p.created_at            as p_created_at,
                    p.updated_at            as p_updated_at

                FROM orders as p
                ORDER BY p_id DESC;
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('showOneForOrder')) {
    function showOneForOrder($id) {
        try {
            $sql = "
                SELECT 
                p.id                    as p_id,
                p.user_id               as p_user_id,
                p.user_name             as p_user_name,
                p.user_email            as p_user_email,
                p.user_phone            as p_user_phone,
                p.user_address          as p_user_address,
                p.total_bill            as p_total_bill,
                p.status_delivery       as p_status_delivery,
                p.status_payment        as p_status_payment,
                p.created_at            as p_created_at,
                p.updated_at            as p_updated_at
                FROM orders as p
                WHERE 
                    p.id = :id 
                LIMIT 1
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
