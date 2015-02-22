<?php 
  /* Template Name: Спасибо */
  get_template_part('includes/header'); 
?>

<!-- <div class="container">
  <div class="row">

    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'page'); ?>
      </div> --><!-- /#content -->
<!--     </div>
    
    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
      <?php get_template_part('includes/sidebar'); ?>
    </div>
    
  </div> --><!-- /.row -->
<!-- </div> --><!-- /.container -->

<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center thank-you">
      <img src="<?php echo get_bloginfo('template_directory');?>/img/thank_you.jpg" alt="thank_you">
      <p>Мы получили вашу заявку, наши менеджеры свяжутся с Вами в ближайшее времы<br>Режим работы офиса с 9:00 - 18:00 выходной: суббота, восресение</p>
      <button type="button" class="btn btn-danger">Перейти на главную</button>
      <p>или <a href="#">вернуться назад</a></p>
    </div>
  </div>
</div>

<?php get_template_part('includes/footer'); ?>
