<?php get_template_part('includes/header'); ?>


<div class="container">
  <div class="row">
    <div class="col-sm-2 left-menu">
      <?php dynamic_sidebar('Сайдбар(главный)'); ?>
    </div>
    <div class="col-sm-10 content">
      <h1><?php echo single_cat_title(); ?></h1>

          <?
              breadcrumb_trail()
          ?>

      <?php get_template_part('includes/loops/content', get_post_format()); ?>
    </div>
  </div>
</div>


<?php get_template_part('includes/footer'); ?>
