<?php 

if (!function_exists('listAllForProduct')) {
    function listAllForProduct() {
        try {
            $sql = "
                SELECT 
                    p.id            as p_id,
                    p.name         as p_name,
                    p.gender   as p_gender,
                    p.origin       as p_origin,
                    p.description        as p_description,
                    p.diameter    as p_diameter,
                    p.thickness    as p_thickness,
                    p.img as p_img,
                    p.price as p_price,
                    p.price_sale as p_price_sale,

                    p.size_id   as p_size_id,
                    p.glass_id   as p_glass_id,
                    p.warranty_id   as p_warranty_id,
                    p.category_id   as p_category_id,
                    p.strap_id   as p_strap_id,
                    p.color_id   as p_color_id,
                    p.brand_id   as p_brand_id,
                    p.tag_id   as p_tag_id,

                    c.name          as c_name,
                    si.name         as si_name,
                    gl.name         as gl_name,
                    wa.name         as wa_name,
                    st.name         as st_name,
                    cl.name         as cl_name,
                    br.name         as br_name,
                    tag.name         as tag_name

                FROM products as p
                INNER JOIN categories   as c    ON c.id     = p.category_id
                INNER JOIN sizes        as si   ON si.id    = p.size_id
                INNER JOIN glasses      as gl   ON gl.id    = p.glass_id
                INNER JOIN warranties   as wa   ON wa.id    = p.warranty_id
                INNER JOIN straps       as st   ON st.id    = p.strap_id
                INNER JOIN colors       as cl   ON cl.id    = p.color_id
                INNER JOIN brands       as br   ON br.id    = p.brand_id
                INNER JOIN tags         as tag  ON tag.id    = p.tag_id
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

if (!function_exists('showOneForProduct')) {
    function showOneForProduct($id) {
        try {
            $sql = "
                SELECT 
                p.id            as p_id,
                p.name         as p_name,
                p.gender   as p_gender,
                p.origin       as p_origin,
                p.description        as p_description,
                p.diameter    as p_diameter,
                p.thickness    as p_thickness,
                p.img as p_img,
                p.price as p_price,
                p.price_sale as p_price_sale,

                p.size_id   as p_size_id,
                p.glass_id   as p_glass_id,
                p.category_id   as p_category_id,
                p.warranty_id   as p_warranty_id,
                p.strap_id   as p_strap_id,
                p.color_id   as p_color_id,
                p.brand_id   as p_brand_id,
                p.tag_id   as p_tag_id,

                c.name          as c_name,
                si.name         as si_name,
                gl.name         as gl_name,
                wa.name         as wa_name,
                st.name         as st_name,
                cl.name         as cl_name,
                br.name         as br_name,
                tag.name         as tag_name

                FROM products as p
                INNER JOIN categories   as c    ON c.id     = p.category_id
                INNER JOIN sizes        as si   ON si.id    = p.size_id
                INNER JOIN glasses      as gl   ON gl.id    = p.glass_id
                INNER JOIN warranties   as wa   ON wa.id    = p.warranty_id
                INNER JOIN straps       as st   ON st.id    = p.strap_id
                INNER JOIN colors       as cl   ON cl.id    = p.color_id
                INNER JOIN brands       as br   ON br.id    = p.brand_id
                INNER JOIN tags         as tag  ON tag.id   = p.tag_id
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

if (!function_exists('getTagsForProduct')) {
    function getTagsForProduct($productID) {
        try {
            $sql = "
                SELECT 
                    tag.id    tag_id,
                    tag.name  tag_name
                FROM tags as tag
                INNER JOIN products as p   ON tag.id     = p.id
                WHERE p.id = :p_id;
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(':p_id', $productID);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('getGlassesForProduct')) {
    function getGlassesForProduct($productID) {
        try {
            $sql = "
                SELECT 
                    gl.id    gl_id,
                    gl.name  gl_name
                FROM glasses as gl
                INNER JOIN products as p   ON gl.id     = p.id
                WHERE p.id = :p_id;
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(':p_id', $productID);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('getWarrantiesForProduct')) {
    function getWarrantiesForProduct($productID) {
        try {
            $sql = "
                SELECT 
                    wa.id    wa_id,
                    wa.name  wa_name
                FROM warranties as wa
                INNER JOIN products as p   ON wa.id     = p.id
                WHERE p.id = :p_id;
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(':p_id', $productID);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('getStrapsForProduct')) {
    function getStrapsForProduct($productID) {
        try {
            $sql = "
                SELECT 
                    st.id    st_id,
                    st.name  st_name
                FROM straps as st
                INNER JOIN products as p   ON st.id     = p.id
                WHERE p.id = :p_id;
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(':p_id', $productID);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('getColorsForProduct')) {
    function getColorsForProduct($productID) {
        try {
            $sql = "
                SELECT 
                    cl.id    cl_id,
                    cl.name  cl_name
                FROM colors as cl
                INNER JOIN products as p   ON cl.id     = p.id
                WHERE p.id = :p_id;
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(':p_id', $productID);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}


if (!function_exists('getBrandsForProduct')) {
    function getBrandsForProduct($productID) {
        try {
            $sql = "
                SELECT 
                    br.id    br_id,
                    br.name  br_name
                FROM brands as br
                INNER JOIN products as p   ON br.id     = p.id
                WHERE p.id = :p_id;
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(':p_id', $productID);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('getSizesForProduct')) {
    function getSizesForProduct($productID) {
        try {
            $sql = "
                SELECT 
                    si.id    si_id,
                    si.name  si_name
                FROM sizes as si
                INNER JOIN products as p   ON si.id     = p.id
                WHERE p.id = :p_id;
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(':p_id', $productID);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// if (!function_exists('deleteTagsByProductID')) {
//     function deleteTagsByProductID($productID) {
//         try {
//             $sql = "DELETE FROM product_tag WHERE product_id = :product_id;";

//             $stmt = $GLOBALS['conn']->prepare($sql);

//             $stmt->bindParam(':product_id', $productID);

//             $stmt->execute();

//             return $stmt->fetchAll();
//         } catch (\Exception $e) {
//             debug($e);
//         }
//     }
