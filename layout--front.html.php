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
    
		<style>
		.blog__item__pic img{
		width: 100%;
		height: 250px;
		object-fit: cover;
		object-position: 0px 10%;
		padding: 5px;
		}
		.blog__item__text h5{
			color: black;
			padding: 5px;
		}
		</style>
    </head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php include('include/navbar.html.php'); ?>
    <!-- Hero Section Begin -->
    <section class="hero">
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
                                <input type="text" placeholder="Search For a book">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+2347084500216</h5>
                                <span>Support 24/7</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="<?php echo $imgPath; ?>img/hero/banner.jpg">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Books</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                    <?php 
					$kids = get_category("kids",1,16, false); 
					if(count($kids) > 1){
					?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo $kids[0]->image; ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="<?php echo $kids[0]->url; ?>"><h4><?php echo $kids[0]->title; ?></a></h6>
                            <h5><?php echo $kids[0]->tag; ?></h5>
                        </div>
                    </div>
                </div>
                <?php }?> <?php 
					$novels = get_category("novels",1,16, false); 
					if(count($novels) > 1){
					?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo $novels[0]->image; ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="<?php echo $novels[0]->url; ?>"><h4><?php echo $novels[0]->title; ?></a></h6>
                            <h5><?php echo $novels[0]->tag; ?></h5>
                        </div>
                    </div>
                </div>
                <?php }?>
                <?php 
					$islamic = get_category("islamic",1,16, false); 
					if(count($islamic) > 1){
					?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo $islamic[0]->image; ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="<?php echo $islamic[0]->url; ?>"><h4><?php echo $islamic[0]->title; ?></a></h6>
                            <h5><?php echo $islamic[0]->tag; ?></h5>
                        </div>
                    </div>
                </div>
                <?php }?>
                <?php 
					$leadership = get_category("leadership",1,16, false); 
					if(count($leadership) > 1){
					?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo $leadership[0]->image; ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="<?php echo $leadership[0]->url; ?>"><h4><?php echo $leadership[0]->title; ?></a></h6>
                            <h5><?php echo $leadership[0]->tag; ?></h5>
                        </div>
                    </div>
                </div>
                <?php }?>
                <?php 
					$journalism = get_category("journalism",1,16, false); 
					if(count($journalism) > 1){
					?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo $journalism[0]->image; ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="<?php echo $journalism[0]->url; ?>"><h4><?php echo $journalism[0]->title; ?></a></h6>
                            <h5><?php echo $journalism[0]->tag; ?></h5>
                        </div>
                    </div>
                </div>
                <?php }?>
                <?php 
					$bussinessandfinance = get_category("bussinessandfinance",1,16, false); 
					if(count($bussinessandfinance) > 1){
					?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo $bussinessandfinance[0]->image; ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="<?php echo $bussinessandfinance[0]->url; ?>"><h4><?php echo $bussinessandfinance[0]->title; ?></a></h6>
                            <h5><?php echo $bussinessandfinance[0]->tag; ?></h5>
                        </div>
                    </div>
                </div>
                <?php }?>
                
                <?php 
					$memoryandbiography = get_category("memoryandbiography",1,16, false); 
					if(count($memoryandbiography) > 1){
					?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo $memoryandbiography[0]->image; ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="<?php echo $memoryandbiography[0]->url; ?>"><h4><?php echo $memoryandbiography[0]->title; ?></a></h6>
                            <h5><?php echo $memoryandbiography[0]->tag; ?></h5>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Blog Post</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                    <?php 
					$blog = get_category("blog",1,16, false); 
					if(count($blog) > 1){
					?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="<?php echo $blog[0]->image; ?>" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i><?php echo format_date($blog[0]->date); ?></li>
                            </ul>
                            <h5><a href="<?php echo $blog[0]->url; ?>"><h4><?php echo $blog[0]->title; ?></a></h5>
                            <p><?php echo shorten($blog[0]->body, 150); ?> ...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="<?php echo $blog[1]->image; ?>" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i><?php echo format_date($blog[1]->date); ?></li>
                            </ul>
                            <h5><a href="<?php echo $blog[1]->url; ?>"><h4><?php echo $blog[1]->title; ?></a></h5>
                            <p><?php echo shorten($blog[1]->body, 150); ?> ...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="<?php echo $blog[2]->image; ?>" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i><?php echo format_date($blog[2]->date); ?></li>
                            </ul>
                            <h5><a href="<?php echo $blog[2]->url; ?>"><h4><?php echo $blog[2]->title; ?></a></h5>
                            <p><?php echo shorten($blog[2]->body, 150); ?> ...</p>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
    
    
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo $imgPath; ?>img/categories/cat-1.jpg">
                            <h5><a href="#">Kids</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo $imgPath; ?>img/categories/cat-2.jpg">
                            <h5><a href="#">Novels</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo $imgPath; ?>img/categories/cat-3.jpg">
                            <h5><a href="#">Islamic</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo $imgPath; ?>img/categories/cat-4.jpg">
                            <h5><a href="#">Leadership</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo $imgPath; ?>img/categories/cat-5.jpg">
                            <h5><a href="#">Self Development</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->


    <!-- Footer Section Begin -->
    <?php include('include/footer.html.php') ?>
    <!-- Js Plugins -->
    <?php include('include/script.css.php') ?>
</body>
</html>