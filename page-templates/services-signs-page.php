<?php 
  /* Template Name: Услуги-подробно-вывески */
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

<script>
  jQuery( document ).ready(function() {
    jQuery('.wpcf7-select').append('<option selected val="'+ jQuery('header h1').text() +'">'+ jQuery('header h1').text() +'</option>')
  });

</script>

<?php get_template_part('includes/footer'); ?>

