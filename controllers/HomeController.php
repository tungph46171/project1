<?php 

function homeIndex() {
    $view = 'home';

    $postTopView = postTopViewOnHome();
    $postTop6Latest = postTop6LatestOnHome($postTopView['p_id']);
    $postTop6Latest = array_chunk($postTop6Latest, 3);
    $postTop5TrendingLatest = postTop5TrendingOnHome($postTopView['p_id']);



    $productTopView = productTopViewOnHome();
    $productTop6Latest = productTop6LatestOnHome($productTopView['p_id']);
    $productTop6Latest = array_chunk($productTop6Latest, 3);

    $products = listAll('products');

    require_once PATH_VIEW . 'layouts/master.php';

}
