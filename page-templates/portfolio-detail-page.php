<?php 
  /* Template Name: Портфолио-подробно */
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
        <li><a href="#">Наружная<br>реклама</a></li>
        <li><a href="#">Печать</a></li>
        <li><a href="#">Брендирование<br>транспорта</a></li>
        <li><a href="#">Выставочные<br>стенды</a></li>
        <li><a href="#">Внутрение<br>оформление</a></li>
      </ul>
    </div>
    <div class="col-sm-10 content">
      <h1>Световая вывеска для  ЗАО «Мередиан»</h1>
      <!-- хлебные крошки -->
      <div class="row portfolio-detail-row-one">
        <div class="col-sm-4">
          <img src="<?php echo get_bloginfo('template_directory');?>/img/client_icon_1.jpg" alt="client_icon_1">
        </div>
        <div class="col-sm-8 portfolio-detail-row-one-text">
          <p>ООО «МеталлСнаб Комплект» работает в сфере металлопромышленной компании с 2001 года, за время работы с этой компанией мы переделали много различных интересных заказов</p>
        </div>
      </div>
      <div class="portfolio-detail-items">
        <div class="row portfolio-detail-row-two">
          <div class="col-sm-5">
            <img src="<?php echo get_bloginfo('template_directory');?>/img/portfolio_detail_img_1.jpg" alt="portfolio_detail_img_1">
          </div>
          <div class="col-sm-7">
            <h2>— Разоаботка макета</h2>
            <p>ООО «МеталлСнаб Комплект» работает в сфере металлопромышленной компании с 2001 года, за время работы с этой компанией мы переделали много различных интересных заказов</p>
          </div>
        </div>
        <div class="row portfolio-detail-row-two">
          <div class="col-sm-5">
            <img src="<?php echo get_bloginfo('template_directory');?>/img/portfolio_detail_img_2.jpg" alt="portfolio_detail_img_1">
          </div>
          <div class="col-sm-7">
            <h2>— Выезжаем на замеры</h2>
            <p>ООО «МеталлСнаб Комплект» работает в сфере металлопромышленной компании с 2001 года, за время работы с этой компанией мы переделали много различных интересных заказов</p>
          </div>
        </div>
        <div class="row portfolio-detail-row-two">
          <div class="col-sm-5">
            <img src="<?php echo get_bloginfo('template_directory');?>/img/portfolio_detail_img_3.jpg" alt="portfolio_detail_img_1">
          </div>
          <div class="col-sm-7">
            <h2>— Вывеска готова</h2>
            <p>ООО «МеталлСнаб Комплект» работает в сфере металлопромышленной компании с 2001 года, за время работы с этой компанией мы переделали много различных интересных заказов</p>
          </div>
        </div>
      </div>
      <div class="row reviews">
        <img src="<?php echo get_bloginfo('template_directory');?>/img/reviews_face_1.png" alt="reviews_face_1">
        <div class="reviews-right">
          <b>Алеся Бигильдеева генеральный директор «ЗАО» Меридиан</b>
          <p>Дружу с «Галакси» 2 года. Очень удобно работать, когда нужны небольшие партии печатной продукции — в моем бизнесе ситуация меняется очень быстро и часто нужно что-то подправлять в каталогах. Очень порадовала оперативная команда, которая работает с вывесками</p>
        </div>
      </div>
      <div class="portfolio-detail-row-three"><h2>— Еще работы по наружной рекламе</h2><a href="#">все работы</a></div>
      <div style="clear: left"></div>
      <div class="text-center portfolio-detail-row-four">
        <div><img src="<?php echo get_bloginfo('template_directory');?>/img/portfolio_1.jpg" alt="portfolio_1"><a href="#">Брендирования<br>Камаза ЗАО «Мередиан»</a></div>
        <div><img src="<?php echo get_bloginfo('template_directory');?>/img/portfolio_2.jpg" alt="portfolio_2"><a href="#">Световой кород<br>на фасаде здания</a></div>
        <div><img src="<?php echo get_bloginfo('template_directory');?>/img/portfolio_3.jpg" alt="portfolio_3"><a href="#">Таблички навигации<br>офисное оформление</a></div>
        <div><img src="<?php echo get_bloginfo('template_directory');?>/img/portfolio_4.jpg" alt="portfolio_4"><a href="#">Брендирования<br>Камаза ЗАО «Мередиан»</a></div>
      </div>
      <div class="text-center contacts-form">
        <h2>— Хотите повторить</h2>
        <span>Разрешите нам вывести ваш бизнес на новый уровень!</span>
        <div>
          <input type="text" placeholder="Имя *">
          <input type="text" placeholder="Телефон *">
          <button type="button" class="btn btn-danger">Нанять нас</button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('includes/footer'); ?>
