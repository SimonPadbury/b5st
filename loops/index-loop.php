<?php
/*
 * The Default Loop (used by index.php, category.php, tag.php, archive.php and author.php)
 * =================================================================
 * If you require only post excerpts to be shown in index and category pages, 
 * use the [---more---] block within blog posts.
 */
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

  <?php get_template_part('loops/index-post', get_post_format()); ?>

  <?php endwhile; ?>

  <?php bootstrap_pagination(); ?>

  <?php
  else :
    get_template_part('loops/404');
  endif;
?>
