<?php get_template_part('includes/header'); ?>

<div class="container">
  <div class="error">
    <div class="row">
      <div class="col-sm-6 text-center">
        <img src="<?php echo get_bloginfo('template_directory');?>/img/error_404.jpg" alt="error_404">
      </div>
      <div class="col-sm-6 text-center">
        <p class="error-bold">ОШИБКА 404</p>
        <p>Неправильно набран адрес<br>или такой страницы не существует</p>
        <button type="button" class="btn btn-danger" onClick="window.location.href='/'">Перейти на главную</button>
        <p>или <a href="#"  onclick="window.history.back();return false;">вернуться назад</a></p>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('includes/footer'); ?>
