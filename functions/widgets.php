<?php

function bst_widgets_init() {

  /*
  Sidebar (one widget area)
   */
  register_sidebar( array(
    'name'            => __( 'Sidebar', 'bst' ),
    'id'              => 'sidebar-widget-area',
    'description'     => __( 'The sidebar widget area', 'bst' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

  /*
  Top menu
   */
  register_sidebar( array(
    'name'            => __( 'Верхнее меню', 'bst' ),
    'id'              => 'top-menu',
    'description'     => __( 'Top menu', 'bst' ),
    'before_widget'   => '<div class="%1$s %2$s header-menu">',
    'after_widget'    => '</div>',
    'before_title'    => '<h4 style="display:none;">',
    'after_title'     => '</h4>',
  ) );
  /*
  Footer menu
   */
  register_sidebar( array(
    'name'            => __( 'Подвал1', 'bst' ),
    'id'              => 'footer-menu1',
    'description'     => __( 'Footer menu', 'bst' ),
    'before_widget'   => '<div class="%1$s %2$s col-sm-2 footer-about">',
    'after_widget'    => '</div>',
    'before_title'    => '<span><b>',
    'after_title'     => '</b></span>',
  ) );
  /*
  Footer menu
   */
  register_sidebar( array(
    'name'            => __( 'Подвал2', 'bst' ),
    'id'              => 'footer-menu2',
    'description'     => __( 'Footer menu', 'bst' ),
    'before_widget'   => '<div class="%1$s %2$s col-sm-3 footer-services">',
    'after_widget'    => '</div>',
    'before_title'    => '<span><b>',
    'after_title'     => '</b></span>',
  ) );
  /*
  Footer menu
   */
  register_sidebar( array(
    'name'            => __( 'Подвал3', 'bst' ),
    'id'              => 'footer-menu3',
    'description'     => __( 'Footer menu', 'bst' ),
    'before_widget'   => '<div class="%1$s %2$s col-sm-3">',
    'after_widget'    => '</div>',
    'before_title'    => '<span><b>',
    'after_title'     => '</b></span>',
  ) );
  /*
  Footer menu
   */
  register_sidebar( array(
    'name'            => __( 'Подвал4', 'bst' ),
    'id'              => 'footer-menu4',
    'description'     => __( 'Footer menu', 'bst' ),
    'before_widget'   => '<div class="%1$s %2$s col-sm-2 footer-contacts">',
    'after_widget'    => '</div>',
    'before_title'    => '<span><b>',
    'after_title'     => '</b></span>',
  ) );
  /*
  Side menu
   */
  register_sidebar( array(
    'name'            => __( 'Сайдбар(главный)', 'bst' ),
    'id'              => 'side-menu',
    'description'     => __( 'Side menu', 'bst' ),
    'before_widget'   => '<div class="%1$s %2$s">',
    'after_widget'    => '</div>',
    'before_title'    => '<h4 style="display:none;">',
    'after_title'     => '</h4>',
  ) );

  /*
  Footer (three widget areas)
   */
  register_sidebar( array(
    'name'            => __( 'Footer', 'bst' ),
    'id'              => 'footer-widget-area',
    'description'     => __( 'The footer widget area', 'bst' ),
    'before_widget'   => '<div class="%1$s %2$s col-sm-4">',
    'after_widget'    => '</div>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

}
add_action( 'widgets_init', 'bst_widgets_init' );
