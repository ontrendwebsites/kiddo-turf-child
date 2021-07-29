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
        <?php  //tfuse_shortcode_content('before'); ?>

<?php

// Check rows exists.
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
<?php
        // Do something...

    // End loop.
    endwhile; endif;
?>
</div>



        <p>where are we?</p>
        <div class="content">
            <div class="boxrow clearfix">
                <?php 
                     while ( have_posts() ) : the_post();
                         tfuse_page_custom_title();
                         the_content();
                         break;
                     endwhile; 
                 ?>
                 <p>where is this?</p>
            </div>
            <?php tfuse_comments(); ?>
        </div>
        <?php if (($sidebar_position == 'right') || ($sidebar_position == 'left')) : ?>
            <div class="sidebar">
                <?php get_sidebar(); ?>
            </div><!--/ .sidebar -->
        <?php endif; ?>
        <?php tfuse_shortcode_content('after'); ?>
        <div id="bottom_bee"></div>  
    </div>
</div>
<!--/ middle -->
<?php get_footer();?>