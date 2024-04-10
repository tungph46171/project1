<!-- ======= Hero Slider Section ======= -->
<section id="hero-slider" class="hero-slider">
    <div class="container-md" data-aos="fade-in">
        <div class="row">
            <div class="col-12">
                <div class="swiper sliderFeaturedPosts">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('<?= BASE_URL ?>assets/client/assets/img/post-slide-1.jpg');">
                                <!-- <div class="img-bg-inner">
                                    <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                </div> -->
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('<?= BASE_URL ?>assets/client/assets/img/post-slide-2.jpg');">
                                <!-- <div class="img-bg-inner">
                                    <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                </div> -->
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('<?= BASE_URL ?>assets/client/assets/img/post-slide-3.jpg');">
                                <!-- <div class="img-bg-inner">
                                    <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                </div> -->
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('<?= BASE_URL ?>assets/client/assets/img/post-slide-4.jpg');">
                                <div class="img-bg-inner">
                                    <h2>Đăng ký liền tay - nhận ngay "5 triệu"</h2>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p> -->
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="custom-swiper-button-next">
                        <span class="bi-chevron-right"></span>
                    </div>
                    <div class="custom-swiper-button-prev">
                        <span class="bi-chevron-left"></span>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hiển thị 1 số sản phẩm -->

                <h1 class="pnm">-- Sản phẩm mới nhất --</h1>
<section id="products" class="products">
    <div class="container" data-aos="fade-up">
        <div class="col-lg-4">
            <table>
                <!-- <tr>
                    <th>
                    <a href="#"><img src="<?= BASE_URL . $productTopView['p_img'] ?>" alt="" class="img-pro"></a>
                    <div class="product-meta"><span class="date"><?= $productTopView['c_name'] ?></span> <span class="mx-1">&bullet;</span></div>
                    <h3><a href="#"><?= $productTopView['p_name'] . ' - ' . $productTopView['p_id'] ?></a></h3>
                    <p class="mb-4 d-block"><?= $productTopView['p_price_sale'] ?></p>
                    </th>
                </tr> -->
                <tr>
                    <th>
                    <?php foreach ($products as $product) : ?>
                    <div class="box-pro">
                        <div class="each-pro">
                            <img class="img-pro" src="<?= BASE_URL . $product['img'] ?>">
                            <div class="prod">
                                <h4 class="card-title"><?= $product['name'] ?></h4>
                                <p class="card-text"><?= number_format($product['price_sale'] ?: $product['price']) ?></p>
                                <a href="<?= BASE_URL . '?act=cart-add&productID=' . $product['id'] . '&quantity=1' ?>" class="btn btn-primary">Đặt hàng</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    </th>
                </tr>
            </table>

        </div> <!-- End .row -->
    </div>
</section> <!-- End Product Grid Section -->



<!-- Hiển thị 1 số bài viết -->
<h1 class="pnm">-- Bài viết nổi bật --</h1>

<section id="posts" class="posts">
    <div class="container" data-aos="fade-up">
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="post-entry-1 lg">
                    <a href="#"><img src="<?= BASE_URL . $postTopView['p_img_thumnail'] ?>" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date"><?= $postTopView['c_name'] ?></span> <span class="mx-1">&bullet;</span> <span><?= $postTopView['p_updated_at'] ?></span></div>
                    <h2><a href="#"><?= $postTopView['p_title'] . ' - ' . $postTopView['p_id'] ?></a></h2>
                    <p class="mb-4 d-block"><?= $postTopView['p_excerpt'] ?></p>

                    <div class="d-flex align-items-center author">
                        <div class="photo"><img src="<?= BASE_URL . $postTopView['au_avatar'] ?>" alt="" class="img-fluid"></div>
                        <div class="name">
                            <h3 class="m-0 p-0"><?= $postTopView['au_name'] ?></h3>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-8">
                <div class="row g-5">

                    <?php foreach ($postTop6Latest as $item) : ?>
                        <div class="col-lg-4 border-start custom-border">
                            <?php foreach ($item as $post) : ?>
                                <div class="post-entry-1">
                                    <a href="#"><img src="<?= BASE_URL . $post['p_img_thumnail'] ?>" alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date"><?= $post['c_name'] ?></span> <span class="mx-1">&bullet;</span> <span><?= $post['p_updated_at'] ?></span></div>
                                    <h2><a href="#"><?= $post['p_title'] . ' - ' . $post['p_id'] ?></a></h2>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>

                    <!-- Trending Section -->
                    <div class="col-lg-4">

                        <div class="trending">
                            <h3>Trending</h3>
                            <ul class="trending-post">

                                <?php foreach ($postTop5TrendingLatest as $key => $post) : ?>
                                    <li>
                                        <a href="#">
                                            <span class="number"><?=  ++$key ?></span>
                                            <h3><?= $post['p_title'] . ' - ' . $post['p_id'] ?></h3>
                                            <span class="author"><?= $post['au_name'] ?></span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                    </div> <!-- End Trending Section -->
                </div>
            </div>

        </div> <!-- End .row -->
    </div>
</section> <!-- End Post Grid Section -->

<style>
    .img-pro{
        border-radius: 10px;
        width: 300px;
        height: 300px;
    }
    .each-pro, .pnm{
        text-align: center;
    }
    .box-pro{
        width: 320px;
        height: 420px;
        margin-bottom: 20px;
    }
    th{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 6.9px;
    }
    .card-title{
        height: 62px;
    }
</style>