<?php
/*
Template Name: Homepage NEW
*/
global $is_tf_blog_page,$post;
$id_post = $post->ID; 
if(tfuse_options('blog_page') != 0 && $id_post == tfuse_options('blog_page')) $is_tf_blog_page = true;
get_header();
if ($is_tf_blog_page) die(); 
?>
<?php $sidebar_position = tfuse_sidebar_position(); ?>
<?php if ($sidebar_position == 'right') : ?>
         <div id="middle" class="cols2">
<?php endif;
    if ($sidebar_position == 'left') : ?>
         <div id="middle" class="cols2 sidebar_left">
<?php endif;
     if ($sidebar_position == 'full') : ?>
          <div id="middle" class="full_width">
<?php endif; ?> 
    <div class="container clearfix page">
        <div class="rocket"></div>
        <div id="mid_baloon"></div>
        <?php tfuse_header_content('header');?>


        <div class="o-grid o-grid--2-column grid-gap-1em weird-box-container">
          <div class="weird-box weird-box-1 box_circle_date">
            <div class="ribbon"><p class="ribbon-text">News of the week</p></div>
            
            <div class="o-grid grid-weird-box">
              <div></div>
              <div>
                <?php 
                // Define our WP Query Parameters
                $the_query = new WP_Query( 'posts_per_page=1' );

                // Start our WP Query
                while ($the_query -> have_posts()) : $the_query -> the_post(); 
                // Display the Post Title with Hyperlink
                ?>
                <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
                <p>
                  <a class="link-more" href="<?php the_permalink() ?>">Read more</a>
                </p>
                <?php 
                // Repeat the process and reset once it hits the limit
                endwhile; wp_reset_postdata(); ?>
              </div>
            </div>
          </div>
          <div class="weird-box weird-box-2 box_circle_photo">
            <div class="ribbon">
              <span></span>
              <?php
              // variables
              $image = get_field('testimonial_image');
              $size = 'medium';
              $text = get_field('testimonial_wording');
              $name = get_field('testimonial_name');

              if ($image) {
                echo wp_get_attachment_image( $image, $size );
              } else {
                echo '<img loading="lazy" src="https://welcometomusic.net/wp-content/uploads/2018/06/s-and-p-01-crop.jpg" alt="" width="103" height="103">';  
              } ?>
            </div>
            <div class="o-grid grid-weird-box">
              <div></div>
              <div class="box_content">
                <p><?php echo $text; ?></p>
                <p><span class="author">− <?php echo $name; ?></span></p>
                <a href="https://welcometomusic.net/testimonials/" class="btn" hidefocus="true" style="outline: currentcolor none medium; opacity: 1;"><strong><span>See what people are saying</span></strong></a>
              </div>
            </div>
          </div>
        </div>



        <?php  //tfuse_shortcode_content('before'); ?>

        <?php
        // 3 box content area
        if( have_rows('three_boxes') ): 
        $count = 0;
            ?>

        <div class="boxrow grid grid-three-columns">
          <?php
          // Loop through rows.
          while( have_rows('three_boxes') ) : the_row();

            $count = $count + 1;
            // Load sub field value.
            $img = get_sub_field('img');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $link = get_sub_field('link');
          ?>
          <div class="box box_<?php echo $count; ?>">
              <div class="box_content">
                  <div class="box_thumb"><img loading="lazy" src="<?php echo esc_url($img['url']); ?>" width="240" height="190" alt=""></div>
                  <h3><?php echo $title; ?></h3>
                  <p><?php echo $description; ?></p>
              </div>
              <?php if( $link ) { ?>
              <div>
                <a href="<?php echo $link; ?>" class="btn"><span>Learn More</span></a>
              </div>
              <?php } ?>
          </div>
          <?php endwhile; endif; ?>
        </div>

        <div class="c-box-white c-box-white--update o-grid o-grid--2-column">
          <div class="videoWrapper">
            <iframe width="560" height="315" data-src="<?php the_field('main_video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

          <div class="video-links">
            <?php the_field('video_of_the_week'); ?>
            <a href="<?php the_field('youtube_channel'); ?>" class="btn" hidefocus="true"><strong>Our YouTube Channel</strong></a>
          </div>
        </div>

        <div class="o-grid o-grid--2-column">
          <div class="big_button_box big_button_box--no-bg">
            <a href="http://localhost:8888/welcometomusic/contact-us" class="btn_custom" hidefocus="true" style="outline: none; opacity: 1;"><strong>Contact Us</strong></a>
          </div>
          <div class="big_button_box big_button_box--no-bg">
            <a href="http://localhost:8888/welcometomusic/wp-content/uploads/2020/05/wtm_catalogue_180715_web.pdf" class="btn_custom" hidefocus="true" target="_blank" style="outline: none; opacity: 1;"><strong>Download our resource catalogue</strong></a>
          </div>
        </div>

<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://welcometomusic.us13.list-manage.com/subscribe/post?u=be91e04d3c840d01ad28a3879&amp;id=dad9fd600c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Subscribe to our newsletter</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name <span class="asterisk">*</span></label>
	<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Last Name <span class="asterisk">*</span></label>
	<input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
</div>
<div class="mc-field-group">
	<label for="mce-CITY">City</label>
	<input type="text" value="" name="CITY" id="mce-CITY">
</div>
<div class="mc-field-group">
	<label for="mce-REGION">State/Region</label>
	<input type="text" value="" name="REGION" class="" id="mce-REGION">
</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-COUNTRY">Country</label>
	<input type="text" value="" name="COUNTRY" class="" id="mce-COUNTRY">
</div>
<div class="mc-field-group">
	<label for="mce-AGETAUGHT">What Age Level Do You Teach?</label>
	<input type="text" value="" name="AGETAUGHT" class="" id="mce-AGETAUGHT">
</div>
<div class="mc-field-group">
	<label for="mce-WORKPLACE">School/Workplace</label>
	<input type="text" value="" name="WORKPLACE" class="" id="mce-WORKPLACE">
</div>
	<div id="mce-responses">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_be91e04d3c840d01ad28a3879_dad9fd600c" tabindex="-1" value=""></div>
    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
  </div>
  </form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[9]='CITY';ftypes[9]='text';fnames[10]='REGION';ftypes[10]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='COUNTRY';ftypes[5]='text';fnames[6]='AGETAUGHT';ftypes[6]='text';fnames[7]='COMPANY';ftypes[7]='text';fnames[8]='WORKPLACE';ftypes[8]='text'; }(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->



        <?php if (($sidebar_position == 'right') || ($sidebar_position == 'left')) : ?>
            <div class="sidebar">
                <?php get_sidebar(); ?>
            </div><!--/ .sidebar -->
        <?php endif; ?>
        <?php //tfuse_shortcode_content('after'); ?>
        <div id="bottom_bee"></div>  
    </div>
</div>
<!--/ middle -->
<?php get_footer();?>