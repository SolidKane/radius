<?php 
  /* Template Name: Клиенты-подробно */
  get_template_part('includes/header'); 
?>


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

<?php get_template_part('includes/footer'); ?>
