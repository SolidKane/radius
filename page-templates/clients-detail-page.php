<?php 
  /* Template Name: Клиенты-подробно */
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
    <div class="col-sm-2 left-menu">
      <ul>
        <li><a href="#">О компании</a></li>
        <li><a href="#">Клиенты</a></li>
        <li><a href="#">Новости</a></li>
        <li><a href="#">Команда</a></li>
        <li><a href="#">Отзывы</a></li>
      </ul>
    </div>
    <div class="col-sm-10 content">
      <h1>ЗАО «Меридиан» транспортная компания</h1>
      <!-- хлебные крошки -->
      <p>ООО «МеталлСнаб Комплект» работает в сфере металлопромышленной компании с 2001 года, за время работы с этой компанией мы переделали много различных интересных заказов</p>
      <div class="clients-detail-content"> 
        <div class="row reviews">
          <img src="<?php echo get_bloginfo('template_directory');?>/img/reviews_face_1.png" alt="reviews_face_1">
          <div class="reviews-right">
            <b>Алеся Бигильдеева генеральный директор «ЗАО» Меридиан</b>
            <p>Дружу с «Галакси» 2 года. Очень удобно работать, когда нужны небольшие партии печатной продукции — в моем бизнесе ситуация меняется очень быстро и часто нужно что-то подправлять в каталогах. Очень порадовала оперативная команда, которая работает с вывесками</p>
          </div>
        </div>
        <h2>— Было сделанно</h2>
        <div class="clients-detail-jobs">
          <div>
            <a href="">
              <img src="<?php echo get_bloginfo('template_directory');?>/img/services_item_1.jpg" alt="services_item_1">
            </a>
            <b>ЗАО «Мередиан»</b>
            Брендирования камаза
          </div>
          <div>
            <a href="">
              <img src="<?php echo get_bloginfo('template_directory');?>/img/services_item_1.jpg" alt="services_item_1">
            </a>
            <b>ЗАО «Мередиан»</b>
            Брендирования камаза
          </div>
          <div>
            <a href="">
              <img src="<?php echo get_bloginfo('template_directory');?>/img/services_item_1.jpg" alt="services_item_1">
            </a>
            <b>ЗАО «Мередиан»</b>
            Брендирования камаза
          </div>
          <div>
            <a href="">
              <img src="<?php echo get_bloginfo('template_directory');?>/img/services_item_1.jpg" alt="services_item_1">
            </a>
            <b>ЗАО «Мередиан»</b>
            Брендирования камаза
          </div>
          <div>
            <a href="">
              <img src="<?php echo get_bloginfo('template_directory');?>/img/services_item_1.jpg" alt="services_item_1">
            </a>
            <b>ЗАО «Мередиан»</b>
            Брендирования камаза
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('includes/footer'); ?>
