<?php
/*
 * The Index Post (or excerpt)
 * ===========================
 * Used by index.php, category.php and author.php
 */
?>


<article role="article" id="post_<?php the_ID()?>" <?php post_class("wrap-md entry-content pt-5"); ?> >
  <header>
    <?php the_post_thumbnail(); ?>
    <div class="index-post-category mb-3 text-muted">
      <i class="bi bi-bookmark"></i> 
      <span class="text-uppercase"><?php the_category(', '); ?></span>
    </div>
    <h2 class="h1 mb-3 fw-bolder">
      <a href="<?php the_permalink(); ?>">
        <?php the_title()?>
      </a>
    </h2>
  </header>

  <section>
    <?php if ( has_excerpt( $post->ID ) ) {
    the_excerpt();
    ?><a href="<?php the_permalink(); ?>">
    	<?php _e( 'Continue reading →', 'b5st' ) ?>
      </a>
  	<?php } else {
  	  the_content( __('Continue reading →', 'b5st' ) );
	  } ?>

    <div class="text-muted mb-3">
      <i class="bi bi-calendar3"></i> <?php b5st_post_date(); ?>
      <i class="bi bi-person-circle"></i> <?php _e('By ', 'b5st'); the_author_posts_link(); ?>
      <i class="bi bi-chat-text"></i> <a href="<?php comments_link(); ?>"><?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), '', 'b5st' ), number_format_i18n( get_comments_number() ) ); ?></a>
    </div>
  </section>

  <hr class="mt-5">
</article>
