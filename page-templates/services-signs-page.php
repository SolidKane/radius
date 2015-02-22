<?php 
  /* Template Name: Услуги-вывески */
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
        <li><a href="#">Вывески</a></li>
        <li><a href="#">Композитные<br>короба</a></li>
        <li><a href="#">Объемные буквы</a></li>
        <li><a href="#">Стеллы</a></li>
        <li><a href="#">Билборды</a></li>
        <li><a href="#">Штендеры</a></li>
      </ul>
    </div>
    <div class="col-sm-10 content">
      <h1>Вывески</h1>
      <!-- хлебные крошки -->
      <div class="row">
        <div class="col-sm-9">
          <p>Рекламное агентство "Радиус" вышло на рынок рекламы в 2003 году. Компания осуществляет полный цикл работ по производству рекламы. Работа всего коллектива направлена на одну цель - решение задач поставленных заказчиком, и как следствие, выход на долгосрочное сотрудничество. В нашем арсенале мы имеем собственные станки (плоттеры) широкоформатной и интерьерной печати, поэтому можем контролировать весь цикл реализации заказа, и гарантировать качество производимой нами продукции.</p>
        </div>
        <div class="col-sm-3 calculate">
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Расчитать стоимость<br>изготовление</button>
          <p>Вы можете заказать расчет услуги оставив свои данные для связи, наши специалисты свяжутся с вами о обсудят детали расчета</p>
        </div>
      </div>
      <!-- Modal calculate-->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog calculate-modal-dialog">
          <div class="modal-content">
            <div class="modal-header calculate-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="<?php echo get_bloginfo('template_directory');?>/img/closs.png" alt="closs"></button>
              <img src="<?php echo get_bloginfo('template_directory');?>/img/modal_calculate_img.png" alt="modal_calculate_img">
              <h2>Рассчитать стоимость изготовление</h2>
              <p>Время работы менеджеров компании с 9:00 - 18:00<br>выходной суббота, воскресение</p>
            </div>
            <div class="modal-body calculate-body">
                <input type="text" placeholder="Имя *">
                <input type="text" placeholder="Телефон *">
                <input type="text" placeholder="Email">
                <textarea name="" id="" cols="30" rows="8" placeholder="Сообщение"></textarea>
            </div>
            <div class="modal-footer calculate-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Расчитать</button>
                <p><span>*</span> — поля обязательные<br>для заполнения.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row signs-row">
        <div class="col-sm-6">
          <h2>— Световые вывески</h2>
          <img src="<?php echo get_bloginfo('template_directory');?>/img/services_signs_left.jpg" alt="services_signs">
          <div class="services-tehlist">
            <img src="<?php echo get_bloginfo('template_directory');?>/img/services_icon_1.jpg" alt="services_icon_1">
            <p>Металокаркас - необходим для устойчивости вывески, служит основой, бывает несколько типов</p>
          </div>
          <div class="services-tehlist">
            <img src="<?php echo get_bloginfo('template_directory');?>/img/services_icon_2.jpg" alt="services_icon_2">
            <p>Лицевая часть - лицевая часть может выполняться из разных материалов, она может быть выполнена из акрила, транслюцентного баннера с печатью 720, а также из совотово поликорбаната</p>
          </div>
          <div class="services-tehlist">
            <img src="<?php echo get_bloginfo('template_directory');?>/img/services_icon_3.jpg" alt="services_icon_3">
            <p>Светодиодная лента для равномерной подсветки световой вывески</p>
          </div>
        </div>
        <div class="col-sm-6">
          <h2>— Несветовые вывески</h2>
          <img class="signs-left-img" src="<?php echo get_bloginfo('template_directory');?>/img/services_signs_right.jpg" alt="services_signs">
          <div class="services-tehlist">
            <img src="<?php echo get_bloginfo('template_directory');?>/img/services_icon_1.jpg" alt="services_icon_1">
            <p>Металокаркас - необходим для устойчивости вывески, служит основой, бывает несколько типов</p>
          </div>
          <div class="services-tehlist">
            <img src="<?php echo get_bloginfo('template_directory');?>/img/services_icon_2.jpg" alt="services_icon_2">
            <p>Лицевая часть - лицевая часть может выполняться из разных материалов, она может быть выполнена из акрила, транслюцентного баннера с печатью 720, а также из совотово поликорбаната</p>
          </div>
        </div>
      </div>
      <h2>— Примеры использования</h2>
      <p>Рекламное агентство "Радиус" вышло на рынок рекламы в 2003 году. Компания осуществляет полный цикл работ по производству рекламы. Работа всего коллектива направлена на одну цель - решение задач поставленных заказчиком, и как следствие, выход на долгосрочное сотрудничество. В нашем арсенале мы имеем собственные станки (плоттеры) широкоформатной и интерьерной печати, поэтому можем контролировать весь цикл реализации заказа, и гарантировать качество производимой нами продукции.</p>
      <div class="services-items">
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
      <h2>— Виды работ</h2>
      <table class="services-table">
        <tr>
          <td class="services-table-left">Объемные буквы без подстветки</td>
          <td>от 5000 руб.</td>
        </tr>
        <tr>
          <td class="services-table-left">Объемные буквы без с подсветкой</td>
          <td>от 9000 руб.</td>
        </tr>
        <tr>
          <td class="services-table-left">Светодиодные буквы</td>
          <td>от 2000 руб.</td>
        </tr>
        <tr>
          <td class="services-table-left">Объемные буквы из пенопласта</td>
          <td>от 7500 руб.</td>
        </tr>
      </table>
      <div class="question">
        <button type="button" class="btn btn-danger text-center" data-toggle="modal" data-target="#myModalquestion">Задать вопрос</button>
        <img src="<?php echo get_bloginfo('template_directory');?>/img/tire.png" alt="-">
        <p>Задайте вопрос на сайте и мы свяжемся с вами в ближайшее вермя и ответим на все интересющие вас вопросы</p>
      </div>
      <!--Modal question-->
      <div class="modal fade" id="myModalquestion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog calculate-modal-dialog">
          <div class="modal-content">
            <div class="modal-header calculate-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="<?php echo get_bloginfo('template_directory');?>/img/closs.png" alt="closs"></button>
              <img src="<?php echo get_bloginfo('template_directory');?>/img/modal_question_img.png" alt="modal_question_img">
              <h2>Рассчитать стоимость изготовление</h2>
              <p>Время работы менеджеров компании с 9:00 - 18:00<br>выходной суббота, воскресение</p>
            </div>
            <div class="modal-body calculate-body">
                <input type="text" placeholder="Имя *">
                <input type="text" placeholder="Телефон *">
                <input type="text" placeholder="Email">
                <textarea name="" id="" cols="30" rows="10" placeholder="Ваш вопрос, комментарии:"></textarea>
            </div>
            <div class="modal-footer calculate-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Расчитать</button>
                <p><span>*</span> — поля обязательные<br>для заполнения.</p>
            </div>
          </div>
        </div>
      </div>
      <h2>— Так же вам может понадобится</h2>
      <ul class="services-list">
        <li><a href="">Композитные короба</a></li>
        <li><a href="">Объемные буквы</a></li>
        <li><a href="">Стеллы</a></li>
        <li><a href="">Билборды</a></li>
        <li><a href="">Штендеры</a></li>
      </ul>
    </div>
  </div>
</div>

<?php get_template_part('includes/footer'); ?>
