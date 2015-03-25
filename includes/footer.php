<?php if ( is_page_template( 'page-templates/main.php' ) or is_page_template( 'page-templates/thank-you-page.php' ) ) {?>

<div class="container footer-main">
  <div class="row">
    <div class="col-sm-4">
        <div class="footer-copyright">© Radius <?php echo date('Y'); ?></div>      
    </div>
    <div class="col-sm-4 text-center">
      <div class="icon-social">


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
    <div class="col-sm-4 text-right">
      <?php get_search_form( ); ?>
    </div>
  </div>
</div>

<?php } else { ?>
<div class="container">
  <div class="footer">
    <div class="row">
      <div class="col-sm-2 footer-logo">
        <img src="<?php echo get_bloginfo('template_directory');?>/img/logo_footer.jpg" alt="logo footer"><br>
        <span>© Radius <?php echo date('Y'); ?></span>
        <div class="row icon-social">

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

        <?php dynamic_sidebar('Подвал1'); ?>
        <?php dynamic_sidebar('Подвал2'); ?>
        <?php dynamic_sidebar('Подвал3'); ?>
        <?php dynamic_sidebar('Подвал4'); ?>

      
    </div>
  </div>
</div>
<?php }?>

<?php wp_footer(); ?>
</body>
</html>