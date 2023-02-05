<?php
/*
Template Name: Register events
*/
global $is_tf_blog_page;
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
        <div class="content_wrapper">
            <?php  tfuse_shortcode_content('before'); ?>
            <div class="content">
                <?php  while ( have_posts() ) : the_post();?>
                <div class="postlist post-detail">
                    <div class="post-item page">
                        <div class="entry clearfix">
                               <?php tfuse_page_custom_title();
                                 the_content(); ?>

<?php
echo '<h2>' . get_field('upcoming_heading') . '</h2>';
echo '<p>' . get_field('upcoming_text') . '</p>';
?>
<?php
// Check rows exists.
if( have_rows('modules') ):

    ?>
    <div class="table-wrapper">
    <table class="table">
        <caption>Upcoming Schedule & Dates</caption>
        <thead>
        <tr>
            <th>Modules*</th>
            <th>Dates</th>
            <th>2022 Early bird rate**</th>
            <th>Standard rate</th>
        </tr>
        </thead>
        <tbody>
            <?php
    // Loop through rows.
    while( have_rows('modules') ) : the_row();

    // Load sub field value.
    $module = get_sub_field('module');
    $dates = get_sub_field('dates');
    $early_rate = get_sub_field('early_rate');
    $standard_rate = get_sub_field('standard_rate');

echo '<tr>';
echo '<td>' . $module . '</td>';
echo '<td>' . $dates . '</td>';
echo '<td>' . $early_rate . '</td>';
echo '<td>' . $standard_rate . '</td>';
echo '</tr>';

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif; ?>
        <tr>
            <td colspan="4">
                <?php echo get_field('last_note'); ?>
            </td>
        </tbody>
    </table>
</div>

<?php
the_field('after_modules');
?>
<hr />
<?php
echo '<h2>' . get_field('sign_up_heading') . '</h2>';
?>
<?php
// Check rows exists.
if( have_rows('register_modules') ):

    ?>
    <div class="table-wrapper">
    <table class="table">
        <thead>
        <tr>
            <th>Module</th>
            <th>Dates</th>
            <th>Register link</th>
        </tr>
        </thead>
        <tbody>
            <?php
    // Loop through rows.
    while( have_rows('register_modules') ) : the_row();

    // Load sub field value.
    $module = get_sub_field('module');
    $dates = get_sub_field('dates');
    $register_link = get_sub_field('register_link');

echo '<tr>';
echo '<td>' . $module . '</td>';
echo '<td>' . $dates . '</td>';
echo '<td><a href="' . $register_link . '">CLICK HERE</a></td>';
echo '</tr>';

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif; ?>
        </tbody>
    </table>
</div>
<?php
the_field('after_events_html');
?>

                        </div>
                    </div>
                </div>
                <?php break; endwhile; // end of the loop. ?>
                <?php tfuse_comments(); ?>
            </div>            
            <?php if (($sidebar_position == 'right') || ($sidebar_position == 'left')) : ?>
                <div class="sidebar">
                    <?php get_sidebar(); ?>
                </div><!--/ .sidebar -->
            <?php endif; ?>
            <div class="clear"></div>
            <?php tfuse_shortcode_content('after'); ?>
        </div>
        <div id="bottom_bee"></div> 
    </div> 
</div><!--/ .middle -->
<?php get_footer();?>