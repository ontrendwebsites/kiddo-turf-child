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
        <div id="mid_bird"></div>
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
                  <?php 
                  // Display the Post Excerpt
                  $content = get_the_content(); echo mb_strimwidth($content, 0, 100, '...');
                  ?>
                </p>
                <a class="link-more" href="<?php the_permalink() ?>">Read article</a>
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
                echo '<img src="https://welcometomusic.net/wp-content/uploads/2018/06/s-and-p-01-crop.jpg" alt="" width="103" height="103">';  
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
                  <div class="box_thumb"><img src="<?php echo esc_url($img['url']); ?>" width="240" height="190" alt=""></div>
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
            <iframe width="560" height="315" src="<?php the_field('main_video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="video-links">
            <a href="<?php the_field('video_of_the_week'); ?>" class="btn" hidefocus="true"><strong>Video of the week</strong></a>
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
        <p style="clear: both;"><link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css"></p>
        <div id="mc_embed_signup">
        <form action="https://welcometomusic.us13.list-manage.com/subscribe/post?u=be91e04d3c840d01ad28a3879&amp;id=dad9fd600c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
          <h2>Subscribe to our newsletter</h2>
        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
        <div class="mailchimp-form-flex">
          <div class="mc-field-group">
            <label for="mce-FNAME">First Name </label>
            <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
          </div>
          <div class="mc-field-group">
            <label for="mce-MMERGE5">Country/Region</label>
            <input type="text" value="" name="MMERGE5" class="" id="mce-MMERGE5">
          </div>
          <div class="mc-field-group">
            <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
          </label>
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
          </div>
        </div>

          <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_be91e04d3c840d01ad28a3879_dad9fd600c" tabindex="-1" value=""></div>
            <div><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            </div>
        </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[5]='MMERGE5';ftypes[5]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone'; }(jQuery));var $mcj = jQuery.noConflict(true);</script>
        <!--End mc_embed_signup-->




        <div class="content">
            <div class="boxrow clearfix">
                <?php 
                     while ( have_posts() ) : the_post();
                         tfuse_page_custom_title();
                         the_content();
                         break;
                     endwhile; 
                 ?>
            </div>
            <?php tfuse_comments(); ?>
        </div>
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