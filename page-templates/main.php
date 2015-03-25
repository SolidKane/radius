<?php 
  /* Template Name: Главная */
  get_template_part('includes/header'); 
?>

<div class="container main-page-lp  zoomIn animated">

  <div class="text-center">
    <img class="main-rad-logo" src="<?php echo get_bloginfo('template_directory');?>/img/logo-big.png" alt="">
  </div>

  <div class="text-center main-two-lvl">
    <img src="<?php echo get_bloginfo('template_directory');?>/img/logo-big-hover.png" alt="">
    <div class="main-slogan">Рекламное производство</div>
    <?php echo do_shortcode( '[reddotbotmenu]' ) ?>
  </div>

</div>

<script>
  jQuery(".main-page-lp").hover(
    function () {
      jQuery(".main-rad-logo").fadeOut('slow');
      setTimeout(function() {
        jQuery(".main-two-lvl").fadeIn('slow');
      }, 600);
    },      function () {
      jQuery(".main-two-lvl").fadeOut('slow');
      setTimeout(function() {
        jQuery(".main-rad-logo").fadeIn('slow');
      }, 600);
    } 
  );
</script>

<?php get_template_part('includes/footer'); ?>