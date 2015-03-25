<?php 
  /* Template Name: Клиенты */
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
      <?php if( have_rows('clients') ): ?>
        <div class="clients">
        <?php while( have_rows('clients') ): the_row(); 

          // vars
          $cli_photo       = get_sub_field('cli_photo');
          $cli_name        = get_sub_field('cli_name');
          $cli_url         = get_sub_field('cli_url');

          ?>
          
          <div class="text-center">
            <img src="<?php echo  $cli_photo['url']; ?>" alt="">
            <a href="<?php echo $cli_url; ?>"><?php echo $cli_name; ?></a>
          </div>

        <?php endwhile; ?>
        </div>
      <?php endif; ?>



    </div>
  </div>
</div>



<?php get_template_part('includes/footer'); ?>
