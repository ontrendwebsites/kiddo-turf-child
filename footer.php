<?php 
    $cat_ids = tfuse_get_categories_ids();
    $home = tfuse_is_homepage();
    $allhome = tfuse_select_all_home();
    $allblog = tfuse_select_all_blog();
?>
<input type="hidden" value="<?php echo $cat_ids; ?>" name="categories_ids"  />
<input type="hidden" value="<?php echo $home; ?>" name="homepage"  />
<input type="hidden" value="<?php echo $allhome; ?>" name="allhome"  />
<input type="hidden" value="<?php echo $allblog; ?>" name="allblog"  />
<div class="footer" style="margin: 0;">
    <div class="inner">
		<div class="">
		  <p style="text-align: center;"><strong><?php echo date('Y'); ?></strong>  Welcome to Music</p>
		</div> 
    </div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>