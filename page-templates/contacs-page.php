<?php 
  /* Template Name: Контактная информация */
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
    <div class="col-sm-12 text-center">
      <h1>Контактная информация</h1>
      <!-- хлебные крошки -->
    </div>
  </div>
</div>
<div class="container-fluid map">
  <div class="container">
    <div class="row map-items-info">
      <div class="col-sm-3">
        <ul>
        Где находимся
          <li>454048, г. Челябинск,</li>
          <li>Комсомольский проспект 17</li>
        </ul>
      </div>
      <div class="col-sm-3">
        <ul>
        Как связаться
          <li>Телефон: +7 (351) 750-28-28</li>
          <li>Email: <a href="#">vradiuse@mail.ru</a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <ul>
        Когда работаем
          <li>Понедельник - пятница</li>
          <li>с 9:00 до 18:00 часов.</li>
        </ul>
      </div>
      <div class="col-sm-3">
        <div class="row map-icon-social text-center">
          <img src="<?php echo get_bloginfo('template_directory');?>/img/map_social_icon_vk.jpg" alt="vk">
          <img src="<?php echo get_bloginfo('template_directory');?>/img/map_social_icon_inst.jpg" alt="inst">
          <img src="<?php echo get_bloginfo('template_directory');?>/img/map_social_icon_f.jpg" alt="f">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container text-center contacts-form">
  <h2>— Напишите нам</h2>
  <span>Разрешите нам вывести ваш бизнес на новый уровень!</span>
  <div>
    <input type="text" placeholder="Имя *">
    <input type="text" placeholder="Телефон *">
    <input type="text" placeholder="Email">
    <textarea name="" id="" cols="30" rows="8" placeholder="Сообщение"></textarea>
    <button type="button" class="btn btn-danger">Отправить</button>
  </div>
</div>

<?php get_template_part('includes/footer'); ?>
