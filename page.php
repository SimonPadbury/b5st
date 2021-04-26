<?php
  get_header(); 
  b5st_mainbody_before();
?>

<main id="site-main">
  <?php
    b5st_mainbody_start();
    get_template_part('loops/page-content');
    b5st_mainbody_end();
  ?>
</main>

<?php 
  b5st_mainbody_after();
  get_footer(); 
?>