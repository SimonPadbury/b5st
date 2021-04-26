<?php
  get_header(); 
  b5st_mainbody_before();
?>

<main id="site-main">
  <?php b5st_mainbody_start(); ?>

  <header class="container py-5 text-center">
    <span class="h3 fw-light"><?php  _e('Archive', 'b5st'); ?></span>
    <h1 class="display-4 mt-3">
      <?php echo the_archive_title(); ?>
    </h1>
  </header>

  <?php get_template_part('loops/index-loop'); ?>

  <?php b5st_mainbody_end(); ?>
</main>

<?php 
  b5st_mainbody_after();
  get_footer(); 
?>