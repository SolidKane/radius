<?php 
  /* Template Name: Портфолио-страница */
  get_template_part('includes/header'); 
?>


<div class="container">
  <div class="row" style="margin-bottom: 40px;">
    <div class="col-sm-12 text-center pad-bott20">
      <h1>Портфолио</h1>
      <?php breadcrumb_trail() ?>
    </div>
    <?php echo do_shortcode( '[go_portfolio id="portfolio"]' ) ?>
  </div>

</div>

<?php get_template_part('includes/footer'); ?>
