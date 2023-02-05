<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php
    if(tfuse_options('disable_tfuse_seo_tab')) {
        wp_title( '|', true, 'right' );
        bloginfo( 'name' );
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
    } else
        wp_title('');?>
    </title>
    <?php tfuse_meta(); ?>
	
	<style>
		nav{display:block}html{font-size:100%;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;-webkit-font-smoothing:antialiased}html,button,input{font-family:sans-serif}body{margin:0}p{margin:1em 0}ul{margin:1em 0}ul{padding:0 0 0 40px}nav ul{list-style:none;list-style-image:none}img{border:0;-ms-interpolation-mode:bicubic;max-width:100%}svg:not(:root){overflow:hidden}form{margin:0}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0;white-space:normal;*margin-left:-7px}button,input{font-size:100%;margin:0;vertical-align:baseline;*vertical-align:middle}button,input{line-height:normal}button{text-transform:none}input[type="checkbox"]{box-sizing:border-box;padding:0;*height:13px;*width:13px;margin-right:10px}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}.clearfix{*zoom:1}.clearfix:before,.clearfix:after{display:table;line-height:0;content:""}.clearfix:after{clear:both}body{font-family:Arial,Helvetica,sans-serif;color:#4f5e62;font-size:14px;line-height:1.6em;background:url(images/bg_middle.jpg) center 735px repeat-y #bdeeeb}.body_wrap{width:100%;position:relative;background:url(images/bg_header.jpg) center top no-repeat;overflow-x:hidden}body:before{content:url(images/dropdown_bg.png) url(images/dropdown_dot.png);display:none}a{text-decoration:none}h3{color:#333;font-family:'Nunito',sans-serif;font-weight:normal}h3{font-size:1.42em;margin:1em 0}input[type="text"]{resize:none;background-color:#fff;font-size:15px;border:1px solid #d9d9d9;padding:12px 10px;color:#606060;-webkit-border-radius:4px;border-radius:4px;-webkit-box-shadow:inset 0px 2px 2px 0px rgba(0,0,0,0.08);box-shadow:inset 0px 2px 2px 0px rgba(0,0,0,0.08)}input[type="text"]{height:16px;line-height:16px}input[type="submit"],button{-webkit-appearance:button;*overflow:visible;height:42px;display:inline-block;line-height:42px;border-radius:21px;-webkit-border-radius:21px;padding:0 23px;margin:10px 0 0 0;background:url(images/button_sprite.png) 0 0 repeat-x;color:#fff;font-size:16px;font-family:'Nunito',sans-serif;font-weight:normal;text-shadow:0 1px 1px rgba(0,0,0,0.25);-webkit-box-shadow:0px 5px 4px 0px rgba(227,193,91,0.75);box-shadow:0px 5px 4px 0px rgba(227,193,91,0.75);text-align:center;border:none}::-webkit-input-placeholder{color:#999}:-moz-placeholder{color:#999}::-moz-placeholder{color:#999}:-ms-input-placeholder{color:#999}.container{margin-left:auto;margin-right:auto;width:960px;position:relative}.boxrow{margin-bottom:25px}.boxrow .box{width:313px;float:left;margin:0 0 0 10px;text-align:center}.boxrow .box:first-child{margin-left:0}.boxrow .box_content{min-height:436px;border-radius:9px 9px 0 0;-webkit-border-radius:9px 9px 0 0}.box_1 .box_content{background:url(images/box_sprite.png) 0 -98px no-repeat #fff}.box_2 .box_content{background:url(images/box_sprite.png) -313px -98px no-repeat #fff}.box_3 .box_content{background:url(images/box_sprite.png) -626px -98px no-repeat #fff}.box_1 .box_content,.box_3 .box_content{padding:7px}.box_2 .box_content{padding:7px 0}.boxrow h3{margin:0 0 20px 0;font-family:'Signika Negative',sans-serif;line-height:1em;font-weight:600;font-size:32px;text-align:center}.boxrow .box_1 h3{color:#ce2802}.boxrow .box_2 h3{color:#b4b11b;margin-bottom:23px}.boxrow .box_3 h3{color:#fff;margin:20px 0 10px;text-shadow:0 1px 1px #6bc6e2}.box_thumb{background:url(images/box1_thumb_bg.png) no-repeat;width:248px;height:194px;padding:25px 26px 31px 25px}.header{width:100%;height:459px;position:relative;background:url(images/header_image.png) center 40px no-repeat}.header .container{padding-top:350px}.sunbeam{position:absolute;z-index:3;left:-160px;top:310px;background:url(images/header_sunbeam.png) no-repeat;width:296px;height:185px}.rocket{background:url(images/header_rocket.png) no-repeat;width:260px;height:248px;position:absolute;z-index:90;right:-101px;top:-112px}.logo{overflow:hidden;height:50px;width:240px;float:left;margin:12px 10px 0 50px;z-index:201;position:relative}.logo img{max-width:100%}#top_kite{background:url(images/kite_top.png) 0 0 no-repeat;position:absolute;left:400px;top:40px;width:240px;height:60px;z-index:3}#mid_bird{background:url(images/fly_bird_left.png) 0 0 no-repeat;width:174px;height:158px;position:absolute;top:256px;left:-97px;z-index:100}#mid_baloon{background:url(images/fly_balloon.png) 0 0 no-repeat;width:235px;height:245px;position:absolute;top:460px;right:-167px;z-index:100}#topmenu{min-height:30px;padding:0px 40px 0 240px;margin:0;position:relative;z-index:200}.topmenu_inner{float:right;background:url(images/topmenu_full.png) right -60px no-repeat;padding-right:20px}.dropdown{background:url(images/topmenu_full.png) left 0 repeat-x;height:60px;line-height:55px;padding:0 0 0 20px!important;z-index:1300;margin:0;padding:0;font-family:'Nunito',sans-serif;font-weight:bold;font-size:21px;font-weight:500;text-shadow:0 1px 1px rgba(0,0,0,0.25)}.dropdown li{display:block;float:left;position:relative;list-style:none;margin:0;padding:3px 7px 2px 33px;height:55px;background:url(images/topmenu_line.png) left center no-repeat}.dropdown li:first-child{padding-left:7px;background:none}.dropdown li a{display:block;color:#fff;height:55px;text-decoration:none}.dropdown li a span{display:block}.dropdown .current-menu-item a{color:#777201;text-shadow:0 1px 1px #fffed6}.dropdown li ul li ul li a{color:#fff;text-shadow:0 1px 1px rgba(0,0,0,0.40)}.dropdown li ul{margin:0;padding:0;text-shadow:none;line-height:1em;font-weight:400;font-size:15px}.dropdown li ul.submenu-1{display:none;position:absolute;top:56px;left:10px;z-index:1308;padding:0}.dropdown li ul li{display:block;float:none;width:160px;margin:0;padding:0;height:auto;background:url(images/dropdown_bg.png) -320px 0 repeat-y}.dropdown li ul.submenu-1 li{line-height:1em}.dropdown li ul li ul{z-index:1309}.dropdown li ul,.dropdown li ul li ul{display:none}.dropdown li ul li ul li{padding:0;float:left;clear:both;width:160px}.dropdown li ul li a{display:block;color:#fff;height:auto;line-height:1.2em;padding:7px 29px 9px 20px;background:url(images/dropdown_bg.png) -480px bottom no-repeat;text-shadow:0 1px 1px rgba(0,0,0,0.40)}.dropdown li ul li a span{background:url(images/dropdown_dot.png) 2px 4px no-repeat;padding-left:18px}.header_slider{position:relative;background:#fff;border-radius:10px;-webkit-border-radius:10px;margin:0 auto 15px auto;width:940px;height:356px;border:10px solid #fff}.header_slider .banner ul{list-style:none;padding:0;margin:0}.header_slider .banner img{border-radius:10px;-webkit-border-radius:10px}.slide_descr,.slide_line{width:360px;text-shadow:0 1px 1px rgba(0,0,0,0.35);font-size:15px;color:#fff;line-height:1.4em}.slide_descr{height:5.4em;overflow:hidden}.slide_title1,.slide_title2{font-family:'Signika Negative',sans-serif;font-weight:600;text-shadow:0 1px 1px rgba(0,0,0,0.25);line-height:1.1em}.slide_title1{font-size:29px;color:#fffbdf}.slide_descr{white-space:normal!important}.slide_line{height:2px;background:#fff08c;-webkit-box-shadow:0px 3px 4px 0px rgba(0,0,0,0.1);box-shadow:0px 3px 4px 0px rgba(0,0,0,0.1)}.btn_slider{height:42px;display:inline-block;line-height:42px;border:3px solid #c1e6eb;border-radius:21px;-webkit-border-radius:21px;padding:0 35px;background:url(images/button_sprite.png) 0 0 repeat-x;color:#fff;font-size:24px;font-family:'Nunito',sans-serif;font-weight:bold;-webkit-box-shadow:0px 10px 5px 0px rgba(0,0,0,0.2);box-shadow:0px 10px 5px 0px rgba(0,0,0,0.2)}.btn_slider span{display:block;color:#fff;text-shadow:0 1px 1px rgba(0,0,0,0.25)}#middle{clear:both;position:relative;z-index:10}
	</style>

	
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri() ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo tfuse_options('feedburner_url', get_bloginfo_rss('rss2_url')); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,600|Nunito:400,700,300' rel='stylesheet' type='text/css'>
    <?php
        global $is_tf_blog_page;
        if ( is_singular() && get_option( 'thread_comments' ) )
                wp_enqueue_script( 'comment-reply' );

        tfuse_head();
        wp_head();
    ?>
	
	<style>
		.search {position:absolute; top:8px; left:0;}
		.social-top {position:absolute; top:0; right:0;} @media (max-width:767px) {.social-top {display:none;}}
		.social-side {position:absolute; top:240px; right:0; z-index:999;} @media (min-width:768px) {.social-side {display:none !important;}}
	</style>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '134550945404006');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=134550945404006&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
<body <?php body_class();?>>
    <div class="body_wrap">
    <?php if( tfuse_options('clouds_animation', true) ) : ?>
        <div id="top_clouds" class="top_stage"></div>
    <?php endif; ?>
	    <div class="header">
		
        <div class="container">

          <!-- START SOCIAL ICONS MOBILE -->
          <div class="social-side">
            <p>Reach out to us on socials or email...</p>
            <div class="social-side-wrapper">
              <a class="facebook" href="https://www.facebook.com/search/top/?q=welcome%20to%20music" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a class="youtube" href="https://www.youtube.com/channel/UCuk5CHXHUqS4PYYOpXZ0FeQ" target="_blank">
                <i class="fab fa-youtube"></i>    
              </a>
              <a class="email" href="mailto:phil@welcometomusic.net" target="_blank">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
          <!-- END SOCIAL ICONS MOBILE -->

          <div class="mobile-heading">
            <img src="https://welcometomusic.net/wp-content/uploads/2022/01/header_mobile_small-cropped.png" />
            <p>Building Creativity and Confidence through Music</p>
          </div>
          

          <div class="search">
          <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
          </div>
				
				<!-- START SOCIAL ICONS DESKTOP -->
				<div class="social-top">
				    <a href="https://www.facebook.com/search/top/?q=welcome%20to%20music" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/icon-fb.svg" style="width:40px" /></a>&nbsp;
				    <a href="https://www.youtube.com/channel/UCuk5CHXHUqS4PYYOpXZ0FeQ" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/icon-yt.svg" style="width:40px" /></a>&nbsp;
					<a href="mailto:phil@welcometomusic.net" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/icon-email.svg" style="width:40px" /></a>
				</div>
				<!-- END SOCIAL ICONS DESKTOP -->

<header>
  <div class="container">
    <div class="logo">
      CSSScript
    </div>
    <input class="hamburger-button" type="checkbox" id="hamburger-button" />
    <label for="hamburger-button">
      <div></div>
    </label>
    <div class="menu">
      <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Work</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <div class="buttons">
        <a href="#" class="button primary">Login</a>
        <a href="#" class="button">Settings</a>
      </div>
    </div>
  </div>
</header>
				
                <div class="sunbeam"></div>
				<?php tfuse_type_logo();?>
                <nav id="topmenu" class="clearfix">   
                    <div class="topmenu_inner">
                        <?php  tfuse_menu('default');  ?>
                    </div>
                </nav>
                
                <div id="top_kite"></div>
            </div>   
        </div>
<?php 
    if($is_tf_blog_page) tfuse_category_on_blog_page();
?>
