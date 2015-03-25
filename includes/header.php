<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<!--Modal question-->
<div class="modal fade" id="myModalquestion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog calculate-modal-dialog">
    <div class="modal-content">
      <div class="modal-header calculate-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="<?php echo get_bloginfo('template_directory');?>/img/closs.png" alt="closs"></button>
        <img src="<?php echo get_bloginfo('template_directory');?>/img/modal_question_img.png" alt="modal_question_img">
        <h2>Задать вопрос</h2>
        <p>Время работы менеджеров компании с 9:00 - 18:00<br>выходной: суббота, воскресение</p>
        <img class="triangel" src="<?php echo get_bloginfo('template_directory');?>/img/triangel.png" alt="">
      </div>

      <?php echo do_shortcode( '[contact-form-7 id="519" title="Задать вопрос"]' ) ?>

    </div>
  </div>
</div>
<!-- END MODAL  -->
<!-- Modal headphones -->
<div class="modal fade" id="modal_headphones" tabindex="-1" role="dialog" aria-labelledby="modal_headphones" aria-hidden="true">
  <div class="modal-dialog calculate-modal-dialog">
    <div class="modal-content">
      <div class="modal-header calculate-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="<?php echo get_bloginfo('template_directory');?>/img/closs.png" alt="closs"></button>
        <img src="<?php echo get_bloginfo('template_directory');?>/img/modal_headphones.png" alt="modal_headphones">
        <h2>Заказать звонок</h2>
        <p>Время работы менеджеров компании с 9:00 - 18:00<br>выходной: суббота, воскресение</p>
        <img class="triangel" src="<?php echo get_bloginfo('template_directory');?>/img/triangel.png" alt="">
      </div>
      <?php echo do_shortcode( '[contact-form-7 id="522" title="Заказать звонок"]' ) ?>

    </div>
  </div>
</div>
<!-- END MODAL  -->
<!-- Modal calculate-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog calculate-modal-dialog">
    <div class="modal-content">
      <div class="modal-header calculate-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="<?php echo get_bloginfo('template_directory');?>/img/closs.png" alt="closs"></button>
        <img src="<?php echo get_bloginfo('template_directory');?>/img/modal_calculate_img.png" alt="modal_calculate_img">
        <h2>Рассчитать стоимость изготовления</h2>
        <p>Время работы менеджеров компании с 9:00 - 18:00<br>выходной: суббота, воскресение</p>
        <img class="triangel" src="<?php echo get_bloginfo('template_directory');?>/img/triangel.png" alt="">
      </div>
      <?php echo do_shortcode( '[contact-form-7 id="518" title="Расчет стоимости"]' ) ?>

    </div>
  </div>
</div>
<!-- END MODAL  -->

<?php if ( is_page_template( 'page-templates/main.php' ) or is_page_template( 'page-templates/thank-you-page.php' ) ) {?>
<div class="container">
  <div class="row header">
    <div class="col-sm-9">
      <?php dynamic_sidebar('Верхнее меню'); ?>
    </div>
    <div class="col-sm-3 text-right phone">
      <span>+7 (351) 750-56-70</span><br>
      <a href="#" data-toggle="modal" data-target="#modal_headphones">Заказать звонок</a>
    </div>
  </div>
</div>
<?php } else { ?>
<div class="container">
  <div class="row header">
    <div class="col-sm-2 header-logo">
      <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
        <img src="<?php echo get_bloginfo('template_directory');?>/img/logo.jpg" alt="logo">
      </a>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-6">
      <?php dynamic_sidebar('Верхнее меню'); ?>
    </div>
    <div class="col-sm-3 text-right phone">
      <span>+7 (351) 750-56-70</span><br>
      <a href="#" data-toggle="modal" data-target="#modal_headphones">Заказать звонок</a>
    </div>
  </div>
</div>
<?php }?>