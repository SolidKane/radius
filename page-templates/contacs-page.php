<?php 
  /* Template Name: Контактная информация */
  get_template_part('includes/header'); 
?>

<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center">
      <h1>Контактная информация</h1>
      <?php breadcrumb_trail() ?>
    </div>
  </div>
</div>
<div class="container-fluid map">
  <div id="map" style="width:100%; height:490px"></div>
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

             <!-- Repeater ACF -->
        <?php if(get_field('social-pages', 'option')): ?>


          <?php while(has_sub_field('social-pages', 'option')): 

            // vars
            $s_img         = get_sub_field('social-img');
            $s_img_hover   = get_sub_field('social-img-hover');
            $s_url         = get_sub_field('social-url');
          ?>
            <a class="social" href="<?php echo $s_url; ?>">
              <img class="social-normal" src="<?php echo  $s_img['url']; ?>" alt="" >
              <img class="social-hover" src="<?php echo  $s_img_hover['url']; ?>" alt="">
            </a>

          <?php endwhile; ?>


        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container text-center contacts-form">
  <h2>— Напишите нам</h2>
  <span>Разрешите нам вывести ваш бизнес на новый уровень!</span>
  <?php echo do_shortcode( '[contact-form-7 id="523" title="Задать вопрос_copy"]' ) ?>
</div>

<!-- Подключаем API  карт 2.x  -->
<script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
<script type="text/javascript">
        // Как только будет загружен API и готов DOM, выполняем инициализацию
        ymaps.ready(init);
 
        function init () {
            // Создание экземпляра карты и его привязка к контейнеру с
            // заданным id ("map")
            var myMap = new ymaps.Map('map', {
                    // При инициализации карты, обязательно нужно указать
                    // ее центр и коэффициент масштабирования
                    center: [55.192485,61.368937], //
                    zoom: 16
                });
 
        // Создание метки 
        var myPlacemark = new ymaps.Placemark(
        // Координаты метки
        [55.192485,61.368937] , {
                    // Свойства
                    // Текст метки
                    hintContent: 'Radius'
                }, {
                    iconImageHref: '/marker.png', // картинка иконки
                    iconImageSize: [55, 76], // размеры картинки
                    iconImageOffset: [-15, -63] // смещение картинки
                    });     
 
 
        // Добавление метки на карту
        myMap.geoObjects.add(myPlacemark);
 
 
        }
    </script>


<?php get_template_part('includes/footer'); ?>
