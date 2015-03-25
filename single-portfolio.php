<?php
// Custom post template
 get_template_part('includes/header'); ?>


<div class="container">
  <div class="row">
    <div class="col-sm-2 left-menu">
      <?php dynamic_sidebar('Сайдбар(главный)'); ?>
    </div>
    <div class="col-sm-10 content">
        <?php get_template_part('includes/loops/content', 'page'); ?>
    </div>
  </div>
</div>

<script>
	jQuery( document ).ready(function() {
	   	jQuery('.cat-item').each(function(i, v) {
		    jQuery(v).contents().eq(1).wrap('<span class="number-menu"/>')
		});
		jQuery('.number-menu').each(function() {
		    var text = jQuery(this).text();
		    jQuery(this).text(text.replace(/\(|\)/g, '')); 
		});
	});
</script>

<?php get_template_part('includes/footer'); ?>

