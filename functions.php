<?php
/*
All the functions are in the PHP pages in the functions/ folder.
*/

require_once locate_template('/functions/cleanup.php');
require_once locate_template('/functions/setup.php');
require_once locate_template('/functions/enqueues.php');
require_once locate_template('/functions/navbar.php');
require_once locate_template('/functions/widgets.php');
require_once locate_template('/functions/search.php');
require_once locate_template('/functions/feedback.php');

// Option page
if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Основные настройки темы',
    'menu_title'  => 'Настройки темы',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
     
}
// Short Codez
// [bartag foo="foo-value"]
function about4row( $atts ) {
    $a = shortcode_atts( array(
        'row1_title' => 'caption1',
        'row1_txt' => 'text1',
        'row2_title' => 'caption2',
        'row2_txt' => 'text2',
        'row3_title' => 'caption3',
        'row3_txt' => 'text3',
        'row4_title' => 'caption4',
        'row4_txt' => 'text4',
    ), $atts );

    return
'
      <div class="row row-items">
        <div class="col-sm-3 text-center">
          <img src="'. get_bloginfo('template_directory'). '/img/advantages_1.png" alt=""><br>
 		  <b>'
 		  . esc_attr($a['row1_title']) .
 		  '</b><br><p>
 		  '. esc_attr($a['row1_txt']) .'
 		  </p>
        </div>
        <div class="col-sm-3 text-center">
          <img src="'. get_bloginfo('template_directory'). '/img/advantages_2.png" alt=""><br>
 		  <b>'
 		  . esc_attr($a['row2_title']) .
 		  '</b><br><p>
 		  '. esc_attr($a['row2_txt']) .'
 		  </p>
        </div>
        <div class="col-sm-3 text-center">
          <img src="'. get_bloginfo('template_directory'). '/img/advantages_3.png" alt=""><br>
 		  <b>'
 		  . esc_attr($a['row3_title']) .
 		  '</b><br><p>
 		  '. esc_attr($a['row3_txt']) .'
 		  </p>
        </div>
        <div class="col-sm-3 text-center">
          <img src="'. get_bloginfo('template_directory'). '/img/advantages_4.png" alt=""><br>
 		  <b>'
 		  . esc_attr($a['row4_title']) .
 		  '</b><br><p>
 		  '. esc_attr($a['row4_txt']) .'
 		  </p>
        </div>
      </div>
'
;
}
add_shortcode( 'about4row', 'about4row' );
// ===
function spec4( $atts ) {
    $a = shortcode_atts( array(
        'post id' => '1',
    ), $atts );
	$post_id = get_the_ID();
    $ret = 'nope data';


    if( have_rows('4spec', $post_id) ):

    	$ret = '<div class="row row-items">';

        while( have_rows('4spec', $post_id) ): the_row(); 
          // vars
          $man_cat_name = get_sub_field('spec_name');
          $man_photo    = get_sub_field('photo');
          $man_description    = get_sub_field('spec_description');
          // code
          $ret .= '<div class="col-sm-3 text-center"><img src="'.$man_photo['url'].'" alt=""><br>';
          $ret .= '<b>'.$man_cat_name.'</b><br><p>'.$man_description.'</p>';     
          $ret .= '</div>';
        endwhile;

        $ret .= '</div>';

        endif;


    return $ret;
}
add_shortcode( 'spec4', 'spec4' );
// ===
function askquestion( $atts ) {
    $a = shortcode_atts( array(
        'description' => 'Задайте вопрос на сайте и мы свяжемся с вами в ближайшее вермя и ответим на все интересющие вас вопросы',
    ), $atts );

    return 
    '
      <div class="question">
	    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalquestion">Задать вопрос</button>
	    <img src="'.get_bloginfo('template_directory').'/img/tire.png" alt="-">
	    <p>'.esc_attr($a['description']).'</p>
      </div>

    '
    ;
}
add_shortcode( 'askquestion', 'askquestion' );
// ===
function reddotbotmenu( $atts ) {
    $a = shortcode_atts( array(
        'post id' => '1',
    ), $atts );
	$post_id = get_the_ID();
    $ret = 'nope data';


    if( have_rows('red_dot_menu_bot', $post_id) ):

    	$ret = '<div class="wrap about-services">';

        while( have_rows('red_dot_menu_bot', $post_id) ): the_row(); 
          // vars
          $rd_name      = get_sub_field('rd_name');
          $rdimg1       = get_sub_field('rd_img');
          $rdimg2       = get_sub_field('rd_img_hover');
          $rd_name_url  = get_sub_field('rd_url');
          // code
          $ret .= '<a href="'.$rd_name_url.'"><div class="text-center"><img class="rd-img1 bounceIn" src="'.$rdimg1['url'].'" alt=""><img class="rd-img2 bounceIn" src="'.$rdimg2['url'].'" alt=""><br>';
          $ret .= ''.$rd_name.'</a>';     
          $ret .= '</div>';
        endwhile;

        $ret .= '</div>';

        endif;


    return $ret;
}
add_shortcode( 'reddotbotmenu', 'reddotbotmenu' );
// ===
function projectsdone( $atts ) {
    $a = shortcode_atts( array(
        'post id' => '1',
    ), $atts );
	$post_id = get_the_ID();
    $ret = 'nope data';


    if( have_rows('been_done', $post_id) ):

    	$ret = '<div class="clients-detail-jobs">';

        while( have_rows('been_done', $post_id) ): the_row(); 
          // vars
          $d_img         = get_sub_field('d_img');
          $d_name        = get_sub_field('d_name');
          $d_description = get_sub_field('d_description');
          $d_url         = get_sub_field('d_url');
          // code
          $ret .= '<div><a class="b_a_hover_cont" href="'.$d_url.'"><div class="b_a_hover"></div>';
          $ret .= '<div style="background-image:url('.$d_img['url'].'); width: 220px; height: 150px; background-repeat: no-repeat; background-size: contain;"></div></a>';     
          $ret .= '<b>'.$d_name.'</b><br/>'.$d_description.'</div>';

        endwhile;

        $ret .= '</div>';
        endif;


    return $ret;
}
add_shortcode( 'projects', 'projectsdone' );

// ===
function testimonials( $atts ) {
    $a = shortcode_atts( array(
        'post id' => '1',
    ), $atts );
	$post_id = get_the_ID();
    $ret = 'nope data';


    if( have_rows('testimon', $post_id) ):

    	$ret = '';

        while( have_rows('testimon', $post_id) ): the_row(); 
          // vars
          $t_photo       = get_sub_field('t_photo');
          $t_head        = get_sub_field('t_head');
          $t_company     = get_sub_field('t_company');
          $t_url         = get_sub_field('t_url');
          $t_description = get_sub_field('t_description');
          // code
          $ret .= '<div class="reviews row"><img src="'.$t_photo['url'].'"><div class="reviews-right">';
          $ret .= '<b>'.$t_head.'</b>';     
          $ret .= '<a href="'.$t_url.'">'.$t_company.'</a>';     
          $ret .= '<p>'.$t_description.'</p></div>';
          $ret .= '</div>';

        endwhile;


        endif;


    return $ret;
}
add_shortcode( 'testimonials', 'testimonials' );
// ===
function makehr( $atts ) {
    $a = shortcode_atts( array(
    ), $atts );

    $ret = '<div class="hr-4"></div>';

    return $ret;
}
add_shortcode( 'hr', 'makehr' );
// ===
function makerow( $atts, $content = null ) {
   return '<div class="row portfolio-detail-row-two">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'row', 'makerow' );
// ===
function makecolsm5( $atts, $content = null ) {
   return '<div class="col-sm-5">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'sm5', 'makecolsm5' );
// ===
function makecolsm7( $atts, $content = null ) {
   return '<div class="col-sm-7">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'sm7', 'makecolsm7' );
// ===
function makeraschet( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'content' => 'Рекламное агентство "Радиус" вышло на рынок рекламы в 2003 году. Компания осуществляет полный цикл работ по производству рекламы. Работа всего коллектива направлена на одну цель - решение задач поставленных заказчиком, и как следствие, выход на долгосрочное сотрудничество. В нашем арсенале мы имеем собственные станки (плоттеры) широкоформатной и интерьерной печати, поэтому можем контролировать весь цикл реализации заказа, и гарантировать качество производимой нами продукции.',
        'subling' => 'Вы можете заказать расчет услуги оставив свои данные для связи, наши специалисты свяжутся с вами о обсудят детали расчета',
    ), $atts );
   return '<div class="row">
	        <div class="col-sm-9">
	          <p>'.esc_attr($a['content']).'</p>
	        </div>

	        <div class="col-sm-3 calculate">
	          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Рассчитать стоимость<br>изготовление</button>
	          <p>'.esc_attr($a['subling']).'</p>
	        </div>
	      </div>';

}
add_shortcode( 'calculateprice', 'makeraschet' );
// ===

// End SC

add_action('after_setup_theme', 'true_load_theme_textdomain');

function true_load_theme_textdomain(){
    load_theme_textdomain( 'bst', get_template_directory() . '/languages' );
}

// Menu counters

// From core:
// apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

// add_action( 'walker_nav_menu_start_el', 'wpse_10042_nav_menu_post_count', 10, 4 );
// function wpse_10042_nav_menu_post_count( $output, $item, $depth, $args )
// {
//     // Check $item and get the data you need
//     printf( '<pre>%s</pre>', var_export( $item, true ) );
//     // Then append whatever you need to the $output
//     $output .= '';

//     return $output;
// }
