<?php 
  /* Template Name: Команда */
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
      <?php if( have_rows('command') ): ?>

        <?php while( have_rows('command') ): the_row(); 

          // vars
          $c_photo       = get_sub_field('c_photo');
          $c_name        = get_sub_field('c_name');
          $c_position    = get_sub_field('c_position');
          $c_description = get_sub_field('c_description');
          $c_phone       = get_sub_field('c_phone');
          $c_email       = get_sub_field('c_email');
        

          ?>
          
          <div class="row team-row">

            <div class="col-sm-3">
              <img src="<?php echo  $c_photo['url']; ?>" alt="">
            </div>
            <div class="col-sm-9">
              <b><?php echo $c_name; ?></b>
              <p><?php echo $c_position; ?></p>
              <div class="mini-hr"></div>
              <p><?php echo $c_description; ?></p>
              <div class="row">
                <div class="col-sm-4">
                  <p>Тел.: <?php echo $c_phone; ?></p>
                </div>
                <div class="col-sm-8">
                  <p>email.: <a href="mailto:<?php echo $c_email; ?>"><?php echo $c_email; ?></a></p>
                </div>
              </div>
            </div>

          </div>

        <?php endwhile; ?>

      <?php endif; ?>



    </div>
  </div>
</div>



<?php get_template_part('includes/footer'); ?>
