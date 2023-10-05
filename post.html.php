<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo site_url()?>themes/Luqman/img/logo.png" type="image/png">
        <title><?php echo $title ?></title>
        <!-- Bootstrap CSS -->
       
    
   
        <?php include('include/style.css.php');
    $imgPath = site_url().'themes/alhakeem/';
    ?>
    <!-- Google Font -->
    <?php include('include/style.css.php') ?>
        
        <style>
        .post-title h1{
            font-size: 25px;
            color: #000;
        }
        .post-image img{
            width: 95%;
            margin-bottom: 20px;
        }
        .post-share a{
            padding: 3px;
        }
        </style>
    </head>
    <body>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v17.0" nonce="FT69F6zF"></script>
<!-- Collect the nav links, forms, and other content for toggling -->
	<!--================Header Menu Area =================-->
<?php include('include/navbar.html.php'); ?>
<!--================Header Menu Area =================--> 				       

<div class="container">
    <div class="row">
        <div class="col-md-12 shadow p-4">
            <div class="post-title">
                <?php if (!empty($p->link)) {?>
                <div class="post-link"><h1 class="entry-title"><a href="<?php echo $p->link ?>" target="_blank"><?php echo $p->title; ?></a></h1></div>
                <?php } else { ?>
                <h1 class="entry-title"><?php echo $p->title; ?></h1>
                <?php } ?>
            </div>
            <div class="post-image">
           <?php if (!empty($p->image) || !empty ($p->audio) || !empty ($p->video)):?><?php endif;?>
            <?php if (!empty($p->image)):?>
            <div class="post-thumbnail">
            <img title="<?php echo $p->title; ?>" alt="<?php echo $p->title; ?>" src="<?php echo $p->image; ?>">
            </div>
            <?php endif; ?>
            <?php if (!empty($p->audio)):?>
            <div class="post-thumbnail">
            <iframe width="100%" height="200px" class="embed-responsive-item" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $p->audio;?>&amp;auto_play=false&amp;visual=true"></iframe>
            </div>
            <?php endif; ?>
            <?php if (!empty($p->video)):?>
            <div class="post-thumbnail">
            <iframe width="100%" height="315px" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo get_video_id($p->video); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
            <?php endif; ?>
            <?php if (!empty($p->quote)):?>
            <div class="post-blockquote">
            <blockquote class="quote"><?php echo $p->quote ?></blockquote>
            </div>
            <?php endif; ?>
            </div>
            <div class="post-content">
            <?php echo $p->body; ?>
            </div>
           <div class="post-share p-3">
                <a target="_blank" href="https://web.facebook.com/sharer.php?u=<?php echo $p->image; ?>&t=<?php echo $p->url ?>&t=<?php echo $p->title ?>"><i class="text-primary fa-2x fa fa-facebook-square"></i></a>
                <a target="_blank" href="http://twitter.com/sharer.php?u=<?php echo $p->image; ?>&t=<?php echo $p->url ?>&t=<?php echo $p->title ?>"><i class="text-dark fa-2x fa fa-twitter-square"></i></a>
                <a target="_blank" href="http://wa.me/sharer.php?u=<?php echo $p->image; ?>&t=<?php echo $p->url ?>&t=<?php echo $p->title ?>"><i class="text-danger fa-2x fa fa-whatsapp"></i></a>
                <a target="_blank" href="http://instagram.com/sharer.php?u=<?php echo $p->image; ?>&t=<?php echo $p->url ?>&t=<?php echo $p->title ?>"><i class="text-dark fa-2x fa fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="related entry-content">
        <hr>
        <p><strong><?php echo i18n('Related_posts');?></strong></p>
        <?php echo get_related($p->related);?>
    </div>
</div>


    <!-- Footer Section Begin -->
    <?php include('include/footer.html.php') ?>
    <!-- Js Plugins -->
    <?php include('include/script.css.php') ?>
</body>
</html>

 

