<?php 
  /* Template Name: Ошибка 404 */
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
  <div class="error">
    <div class="row">
      <div class="col-sm-6 text-center">
        <img src="<?php echo get_bloginfo('template_directory');?>/img/error_404.jpg" alt="error_404">
      </div>
      <div class="col-sm-6 text-center">
        <p class="error-bold">ОШИБКА 404</p>
        <p>Неправильно набран адрес<br>или такой страницы не существует</p>
        <button type="button" class="btn btn-danger">Перейти на главную</button>
        <p>или <a href="#">вернуться назад</a></p>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('includes/footer'); ?>
