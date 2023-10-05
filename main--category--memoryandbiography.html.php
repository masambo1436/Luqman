<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Luqman Template">
    <meta name="keywords" content="Luqman, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo site_url()?>themes/Luqman/img/logo.png" type="image/png">
    <title><?php echo $title ?></title>

    
    <?php include('include/style.css.php');
    $imgPath = site_url().'themes/Luqman/';
    ?>
    <!-- Google Font -->
    <?php include('include/style.css.php') ?>
    </head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php include('include/navbar.html.php'); ?>

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
            <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Categories</span>
                        </div>
                        <ul>
                            <li><a href="<?php echo site_url(); ?>category/kids">Kids</a></li>
                            <li><a href="<?php echo site_url(); ?>category/novels">Novels</a></li>
                            <li><a href="<?php echo site_url(); ?>category/islamic">Islamic</a></li>
                            <li><a href="<?php echo site_url(); ?>category/leadership">Leadership</a></li>
                            <li><a href="<?php echo site_url(); ?>category/selfdevelopment">Self Development</a></li>
                            <li><a href="<?php echo site_url(); ?>category/businessandfinance">Business & Finance</a>
                            </li>
                            <li><a href="<?php echo site_url(); ?>category/memoryandbiography">Memory & Biography</a>
                            </li>
                            <li><a href="<?php echo site_url(); ?>category/nigerianhistoryandpolitics">Nigerian History
                                    & Politics</a></li>
                            <li><a href="<?php echo site_url(); ?>category/journalism">Journalism</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+2348062281047</h5>
                                <span>Support 24/7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="<?php echo $imgPath; ?>img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Memory and Biography Books</h2>
                        <div class="breadcrumb__option">
                            <a href="<?php echo site_url(); ?>">Home</a>
                            <span>Memory and Biography</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Latest Products</h4>
                                <?php 
					$memoryandbiography = get_category("memoryandbiography",1,16, false); 
					if(count($memoryandbiography) > 1){
					?>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic" style="width:70px;height:70px;">
                                                <img src="<?php echo $memoryandbiography[0]->image; ?>" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6><?php echo $memoryandbiography[0]->title; ?></h6>
                                                <span><?php echo $memoryandbiography[0]->tag; ?></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic" style="width:70px;height:70px;">
                                                <img src="<?php echo $memoryandbiography[1]->image; ?>" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6><?php echo $memoryandbiography[1]->title; ?></h6>
                                                <span><?php echo $memoryandbiography[1]->tag; ?></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic" style="width:70px;height:70px;">
                                                <img src="<?php echo $memoryandbiography[2]->image; ?>" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6><?php echo $memoryandbiography[2]->title; ?></h6>
                                                <span><?php echo $memoryandbiography[2]->tag; ?></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Memory and Biography</h2>
                        </div>

                    </div>
                    <div class="row">
                    <?php foreach ($posts as $p): ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?php echo $p->image; ?>">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="<?php echo $p->url; ?>"><?php echo $p->title; ?></a></h6>
                                    <h2><?php echo $p->tag; ?></h2>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="product__pagination">
                        <!-- pagination start --> 
       <?php if (!empty($posts)) { ?>
                    <?php if (!empty($pagination['prev']) || !empty($pagination['next'])) : ?>
                        <div class="navigation pagination">
                            <div class="nav-links">
                                <?php if (!empty($pagination['prev'])) : ?>
                                    <a class="prev page-numbers" href="?page=<?php echo $page - 1 ?>"><button class="btn btn-secondary px-4 py-1 rounded"><i class="fa fa-angle-left"></i></button></i></a>
                                <?php endif; ?>
                                <?php if (!empty($pagination['next'])) : ?>
                                    <a class="next page-numbers" href="?page=<?php echo $page + 1 ?>"><button class="btn btn-secondary px-4 py-1 rounded"><i class="fa fa-angle-right"></i></button></a>
                                <?php endif; ?>
                                <p class="page-numbers"><?php echo $pagination['pagenum'];?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php } ?>
                <!-- pagination ends -->
            </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <?php include('include/footer.html.php') ?>
    <!-- Js Plugins -->
    <?php include('include/script.css.php') ?>
</body>

</html>