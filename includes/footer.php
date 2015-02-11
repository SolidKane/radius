<!-- <footer class="container site-footer">
  <hr/>
	<div class="row">
    <?php dynamic_sidebar('footer-widget-area'); ?>
  </div>
  <hr/>
  <div class="row">
    <div class="col-lg-12 site-sub-footer">
      <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
    </div>
  </div>
</footer> -->

<div class="container footer">
  <div class="row">
    <div class="col-sm-2 footer-logo">
      <img src="<?php echo get_bloginfo('template_directory');?>/img/logo_footer.jpg" alt="logo footer"><br>
      <span>© Radius 2012</span>
      <div class="row">
        <div class="col-sm-4"><img src="<?php echo get_bloginfo('template_directory');?>/img/icon_social_vk.jpg" alt="vk"></div>
        <div class="col-sm-4"><img src="<?php echo get_bloginfo('template_directory');?>/img/icon_social_inst.jpg" alt="inst"></div>
        <div class="col-sm-4"><img src="<?php echo get_bloginfo('template_directory');?>/img/icon_social_f.jpg" alt="f"></div>
      </div>
    </div>
    <div class="col-sm-2">
      <ul>
        <span><b>О компании</b></span>
        <li><a href="#">Радиус</a></li>
        <li><a href="#">Клиенты</a></li>
        <li><a href="#">Новости</a></li>
        <li><a href="#">Команда</a></li>
        <li><a href="#">Отзывы</a></li>
      </ul>
    </div>
    <div class="col-sm-3">
    <ul>
        <span><b>Услуги</b></span>
        <li><a href="#">Широкоформатная печать</a></li>
        <li><a href="#">Наружная реклама</a></li>
        <li><a href="#">Проведение рекламных компаний</a></li>
        <li><a href="#">Оформление торговых точек</a></li>
      </ul>
    </div>
    <div class="col-sm-3">
      <ul>
        <span><b>Портфолио</b></span>
        <li><a href="#">Наружная реклама</a></li>
        <li><a href="#">Выставочные стенды</a></li>
        <li><a href="#">Оформление транспорта</a></li>
        <li><a href="#">Рекламные компании</a></li>
      </ul>
    </div>
    <div class="col-sm-2">
      <ul>
        <span><b>Контакты</b></span>
        <li><a href="#">vradiuse@mail.ru</a></li>
        <li><b>8 (351) 750-28-28</b></li>
        <li><a href="#">Разработка сайта startup-web.ru</a></li>
      </ul>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
