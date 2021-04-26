<?php
/*
 * The Search Results (Main Header and) Loop
 */
?>

<header class="wrap-lg py-5 text-center">
  <h1 class="display-2 my-5">
    <?php _e('Search Results for', 'b5st'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;
  </h1>
</header>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class("wrap-md pb-5")?>>
    <header class="entry-header">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
    </header>
    <section class="entry-content">
      <?php the_excerpt(); ?>
    </section>
  </article>
<?php endwhile; else: ?>
  <div class="wrap-md pb-5 entry-content">
    <article class="alert alert-warning px-3">
      <i class="bi bi-exclamation-triangle"></i> <?php _e('Sorry, your search yielded no results.', 'b5st'); ?>
    </article>
  </div>
<?php endif; ?>
