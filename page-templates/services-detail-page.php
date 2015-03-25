<?php 
  /* Template Name: Услуги-подробно */
  get_template_part('includes/header'); 
?>

<div class="container">
  <div class="row">
    <div class="col-sm-2 left-menu">
      <?php dynamic_sidebar('Сайдбар(главный)'); ?>
    </div>
    <div class="col-sm-10 content">
      <?php get_template_part('includes/loops/content', 'page'); ?>

     <!-- Repeater ACF -->
        <?php if( have_rows('servises') ): ?>
          <div class="services-detail-content"><div class="services-detail-row">
          <?php while( have_rows('servises') ): the_row(); 

            // vars
            $s_img         = get_sub_field('s_img');
            $s_name        = get_sub_field('s_name');
            $s_url         = get_sub_field('s_url');
            $s_description = get_sub_field('s_description');

            ?>

            <div class="serv-inner-cont text-left">
              <img src="<?php echo  $s_img['url']; ?>" alt="">
              <a href="<?php echo $s_url; ?>"><?php echo $s_name; ?></a>
              <p><?php echo $s_description; ?></p>
            </div>

          <?php endwhile; ?>
          </div></div>
        <?php endif; ?>

    </div>
  </div>
</div>

<?php get_template_part('includes/footer'); ?>

