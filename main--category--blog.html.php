<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="<?php echo str_replace('_', '-', config('language'));?>" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="<?php echo str_replace('_', '-', config('language'));?>" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="<?php echo str_replace('_', '-', config('language'));?>"> <!--<![endif]-->  
<head>
    <?php echo head_contents();?>
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $description; ?>"/>
    <link rel="icon" href="<?php echo site_url()?>themes/Luqman/img/logo.png" type="image/png">
    <link rel="canonical" href="<?php echo $canonical; ?>" />
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Crimson+Text:400,400italic" rel="stylesheet" type="text/css">     
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo site_url();?>themes/blog/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo site_url();?>themes/blog/css/font-awesome.min.css">
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="<?php echo site_url();?>themes/blog/css/styles.css">
    <?php include('include/style.css.php');
    $imgPath = site_url().'themes/Luqman/';
    ?>
    <!-- Google Font -->
    <?php include('include/style.css.php') ?>

    <style>
		.date {
			margin-top: 30px;
			margin-bottom: 30px;
		}
		.img-fluid{
			width: 100%;
			height: 240px;
			object-fit: cover;
			object-position: 50% 10%;
			border: 1px solid #28a745;
		}

       
		</style>

</head> 
<?php     
    if (isset($_GET['search'])) {
        $search = _h($_GET['search']);
        $url = site_url() . 'search/' . remove_accent($search);
        header("Location: $url");
    }
?>
<body class="<?php echo $bodyclass; ?>" itemscope="itemscope" itemtype="http://schema.org/Blog">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v17.0" nonce="FT69F6zF"></script>
<?php if (facebook()) { echo facebook(); } ?>
<?php if (login()) { toolbar(); } ?>
    <!-- ******HEADER****** --> 
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="<?php echo $imgPath; ?>/logo.png" alt=""></a>
        </div>
       
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="<?php echo site_url(); ?>">Home</a></li>
                <li><a href="#">Books</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="<?php echo site_url(); ?>category/kids">Kids</a></li>
                        <li><a href="<?php echo site_url(); ?>category/novels">Novels</a></li>
                        <li><a href="<?php echo site_url(); ?>category/islamic">Islamic</a></li>
                        <li><a href="<?php echo site_url(); ?>category/leadership">Leadership</a></li>
                        <li><a href="<?php echo site_url(); ?>category/selfdevelopment">Self Development</a></li>
                        <li><a href="<?php echo site_url(); ?>category/bussinessandfinance">Business and Finance</a></li>
                        <li><a href="<?php echo site_url(); ?>category/memoryandbiography">Memory and Biography</a></li>
                        <li><a href="<?php echo site_url(); ?>category/nigerianhistoryandpolitics">Nigerian History and Politics</a></li>
                        <li><a href="<?php echo site_url(); ?>category/journalism">Journalism</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo site_url(); ?>category/blog">Blog</a></li>
                <li><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>

    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="<?php echo site_url(); ?>"><img src="<?php echo $imgPath; ?>img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="<?php echo site_url(); ?>">Home</a></li>
                            <li><a href="#">Books</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="<?php echo site_url(); ?>category/kids">Kids</a></li>
                                    <li><a href="<?php echo site_url(); ?>category/novels">Novels</a></li>
                                    <li><a href="<?php echo site_url(); ?>category/islamic">Islamic</a></li>
                                    <li><a href="<?php echo site_url(); ?>category/leadership">Leadership</a></li>
                                    <li><a href="<?php echo site_url(); ?>category/selfdevelopment">Self Development</a></li>
                                    <li><a href="<?php echo site_url(); ?>category/bussinessandfinance">Business and Finance</a></li>
                                    <li><a href="<?php echo site_url(); ?>category/memoryandbiography">Memory and Biography</a></li>
                                    <li><a href="<?php echo site_url(); ?>category/nigerianhistoryandpolitics">Nigerian History and Politics</a></li>
                                    <li><a href="<?php echo site_url(); ?>category/journalism">Journalism</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo site_url(); ?>category/blog">Blog</a></li>
                            <li><a href="<?php echo site_url(); ?>contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
               
            </div>
        </div>
    </header>
    <!-- Header Section End -->
        <section class="latest_blog_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Our Blog</h2>
        			<p>....</p>
        		</div>
                <aside class="recent-posts aside section">
				<div class="row latest_blog_inner p-3">
                <?php foreach ($posts as $p): ?>
        			<div class="col-md-4 mt-3 shadow-sm">
        				<div class="l_blog_item">
        					<img class="img-fluid" src="<?php echo $p->image; ?>" alt="image">
                           
                            <?php if (disqus()): ?>
                <aside class="comments aside section">
                    <div class="section-inner">
                        <h2 class="heading">Comments</h2>
                        <div class="content">
                            <?php echo recent_comments() ?>
                            <style>.dsq-widget-list {padding:0;}li.dsq-widget-item {color:#434343;border-bottom: 1px dotted #d9d9d9;margin: 0 0 10px;padding-bottom: 10px;font-size:14px;}li.dsq-widget-item:last-child{border-bottom:none;margin-bottom:0;}a.dsq-widget-user {font-weight:normal;}img.dsq-widget-avatar {margin-right:10px; }.dsq-widget-comment {display:block;padding-top:5px;}.dsq-widget-comment p {display:block;margin:0;padding:0!important;font-size:14px!important;}p.dsq-widget-meta {padding-top:5px!important;margin:0;font-size:14px!important;}#dsq-combo-widget.grey #dsq-combo-content .dsq-combo-box {background: transparent;}#dsq-combo-widget.grey #dsq-combo-tabs li {background: #DDDDDD;}</style>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                <?php endif; ?>
                           
                            <?php if (facebook() || disqus()): ?>
                                <div class="fb-comments" data-href="http://127.0.0.1/alhakeem/category/blog" data-width="" data-numposts="500"></div>
               <div id="comments">
               <?php if (disqus_count()) { ?>
                        <span><i class="fa fa-comments"></i> <a href="<?php echo $p->url ?>#disqus_thread"> comments</a></span>
                    <?php } elseif (facebook()) { ?>
                        <i class="fa fa-comments"></i> <a href="<?php echo $p->url ?>#comments"><span><fb:comments-count href=<?php echo $p->url ?>></fb:comments-count> comments</span></a>
                    <?php } ?>
                    
                    <?php if (facebook()): ?>
                        <div class="fb-comments" data-href="<?php echo $p->url ?>" data-numposts="<?php echo config('fb.num') ?>" data-colorscheme="<?php echo config('fb.color') ?>"></div>
                    <?php endif; ?>
                    <?php if (disqus()): ?>
                        <div id="disqus_thread"></div>
                    <?php endif; ?>
                </div>
           
<?php endif; ?>
        					<a class="date" href="#"><?php echo format_date($p->date); ?> | By Management</a>
        					<h6><a href="<?php echo $p->url; ?>"><?php echo $p->title; ?></a></h6>
        					<p><?php echo shorten($p->body, 150); ?> ...</p>
                            <span class="share pull-right">
                        <a target="_blank" class="first" href="https://www.facebook.com/sharer.php?u=<?php echo $p->url ?>&t=<?php echo $p->title ?>"><i class="fa fa-facebook"></i></a> 
                        <a target="_blank" href="https://twitter.com/share?url=<?php echo $p->url ?>&text=<?php echo $p->title ?>"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="https://whatsapp.com/share?url=<?php echo $p->url ?>&text=<?php echo $p->title ?>"><i class="fa fa-whatsapp"></i></a>
                        <a target="_blank" href="https://instagram.com/share?url=<?php echo $p->url ?>&text=<?php echo $p->title ?>"><i class="fa fa-instagram"></i></a>
                    </span> 
						<a href="<?php echo $p->url; ?>" class="btn btn-success btn-sm">Readmore</a>
						</div>
					</div>
                    <?php endforeach; ?>
        		</div>
        	</div> 
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
        </section>
        <!--================End Latest Blog Area =================-->
        </section>
        <!--================End Latest Blog Area =================-->
         
    </section>
    <!-- Blog Section End -->

    <!-- ******FOOTER****** --> 
    <!-- Javascript -->   
    <?php include('include/footer.html.php') ?>
    <!-- Js Plugins -->
    <?php include('include/script.css.php') ?>       
    <script type="text/javascript" src="<?php echo site_url();?>themes/blog/js/jquery-latest.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url();?>themes/blog/js/bootstrap.min.js"></script>
<?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>    
</body>
</html>   