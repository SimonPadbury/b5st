<?php
$userInfo = get_userdata( get_query_var('author'));
$isAuthor = true;
if (
  !in_array('contributor', $userInfo -> roles) &&
  !in_array('administrator', $userInfo -> roles) &&
  !in_array('author', $userInfo -> roles) &&
  !in_array('editor', $userInfo -> roles)
) {
  $isAuthor = false;
  wp_redirect(esc_url( home_url() ) . '/404', 404);
}
?>
<?php
  get_header(); 
  b5st_mainbody_before();
?>

<main id="site-main">
  <?php b5st_mainbody_start(); ?>

  <header class="container py-5 text-center">
    <?php if ($isAuthor === true): ?>
      <span class="h3 mt-5 fw-light"><?php _e('Posts by:', 'b5st'); ?></span>
      <h1 class="display-4 mt-3">
      <?php echo get_the_author_meta( 'display_name' ); ?>
      </h1>
    <?php endif; ?>
  </header>

  <?php
    if(have_posts()):
      get_template_part('loops/index-loop');
    else:
      get_template_part('loops/index-none');
    endif;
  ?>

  <?php b5st_mainbody_end(); ?>
</main>

<?php 
  b5st_mainbody_after();
  get_footer(); 
?>