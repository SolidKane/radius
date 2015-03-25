<?php 
  /* Template Name: Новости */
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
      <h1>Новости</h1>
      <!-- хлебные крошки -->
      <div class="news-container">
        <div class="row news-row">
          <img src="<?php echo get_bloginfo('template_directory');?>/img/news_1.jpg" alt="news_1">
          <div class="news-right">
            <a href="#">Радиус и ЮКЖСИ провели совместную акцию</a>
            <p class="news-date">12.01.2014</p>
            <p>Мы не только производим наружную рекламы, но и с удовольствием участвуем в подготовке и проведении различных мероприятий для своих клиентов!</p>
          </div>
        </div>
        <div class="mini-hr"></div>
        <div class="row news-row">
          <img src="<?php echo get_bloginfo('template_directory');?>/img/news_2.jpg" alt="news_2">
          <div class="news-right">
            <a href="#">День рождения Саши</a>
            <p class="news-date">05.01.2014</p>
            <p>Сегодня отличный день! День рождение у замечательного человечка, отличного друга и нашей неподражаемой коллеги Киселевой Александры!<br>
  Саша, в твоем арсенале есть много неоценимых навыков: от дизайнера, до руководителя серьезных рекламных проектов! Мы желаем тебе развиваться, искать новые решения проф. задач, и легко, с улыбкой (так как ты это умеешь) достигать всех намеченных целей !</p>
          </div>
        </div>
        <div class="mini-hr"></div>
        <div class="row news-row">
          <img src="<?php echo get_bloginfo('template_directory');?>/img/news_3.jpg" alt="news_3">
          <div class="news-right">
            <a href="#">Брендирования фуры «ЗЗБО»</a>
            <p class="news-date">04.01.2014</p>
            <p>Дизайн и брендирование корпоративного транспорта для "Завода Бетоносмесительного оборудования".</p>
          </div>
        </div>
        <div class="mini-hr"></div>
        <div class="row news-row">
          <img src="<?php echo get_bloginfo('template_directory');?>/img/news_4.jpg" alt="news_4">
          <div class="news-right">
            <a href="#">Брендирования фуры «ЗЗБО»</a>
            <p class="news-date">02.01.2014</p>
            <p>Изготовление выставочного стенда для "Уральского Завода Трубопроводной Арматуры" на международную выставку г. Алма-Ата, Казахстан.</p>
          </div>
        </div>
        <!-- переключатель станицы -->
      </div>
    </div>
  </div>
</div>

<?php get_template_part('includes/footer'); ?>
