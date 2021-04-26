<?php
/*
 * The Page Content Loop
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class("mb-5")?>>
    <header class="container py-5 text-center">
      <h1 class="display-2 my-5">
        <?php the_title()?>
      </h1>
    </header>
    <section class="wrap-md pb-5 entry-content">
      <?php the_content()?>
      <?php wp_link_pages(); ?>
    </section>
  </article>
<?php
  endwhile;
  else :
    get_template_part('loops/404');
  endif;
?>
