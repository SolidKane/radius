<?php
/*
The Default Loop (used by index.php and category.php)
=====================================================

If you require only post excerpts to be shown in index and category pages, then use the [---more---] line within blog posts.

If you require different templates for different post types, then simply duplicate this template, save the copy as, e.g. "content-aside.php", and modify it the way you like it. (The function-call "get_post_format()" within index.php, category.php and single.php will redirect WordPress to use your custom content template.)

Alternatively, notice that index.php, category.php and single.php have a post_class() function-call that inserts different classes for different post types into the section tag (e.g. <section id="" class="format-aside">). Therefore you can simply use e.g. .format-aside {your styles} in css/bst.css style the different formats in different ways.
*/
?>

<?php if(have_posts()): while(have_posts()): the_post();?>
    <article role="article" id="post_<?php the_ID()?>">

      <div class="news-container">
        <div class="row news-row">
          <?php the_post_thumbnail(); ?>
          <div class="news-right">
            <a href="<?php the_permalink(); ?>"><?php the_title()?></a>
            
            <p class="news-date"><?php the_date('d.m.Y'); ?></p>
          
            <?php the_content( __( '&hellip; ' . __('Продолжить чтение', 'bst' ) . ' <i class="glyphicon glyphicon-arrow-right"></i>', 'bst' ) ); ?>

          </div>
        </div>
        <div class="mini-hr"></div>
      </div>

    </article>
<?php endwhile; ?>

<?php else: wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; endif; ?>
