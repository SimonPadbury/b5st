<?php
/*
 * The Single Post
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class("entry-content")?>>
    <header class="wrap-lg my-5 entry-header">
      <div class="index-post-category mb-5 text-center text-muted">
        <i class="bi bi-bookmark"></i> 
        <span class="text-uppercase"><?php the_category(', '); ?></span>
      </div>
      <h1 class="display-1 text-center fw-bolder"><?php the_title()?></h1>
      <div class="header-metas d-flex justify-content-center align-items-center my-5 text-muted">
        
        <div class="pe-3 d-flex align-items-center">
          <?php # <i class="bi bi-person-circle"></i> ?>
          <div class="me-1 border rounded-circle overflow-hidden">
            <?php b5st_author_avatar(); ?>
          </div>
          <?php _e('By ', 'b5st'); the_author_posts_link(); ?>
        </div>

        <div class="pe-3">
          <i class="bi bi-calendar3"></i>
          <?php b5st_post_date(); ?>
        </div>

        <div>
          <i class="bi bi-chat-text"></i>
          <a href="#post-comments"><?php
            $comment_count = get_comments_number();
            printf(
              /* translators: 1: comment count number. */
              esc_html( _nx( '%1$s comment', '%1$s comments', $comment_count, 'b5st' ) ),
              number_format_i18n( $comment_count )
            );
          ?></a>
        </div>
      </div>
    </header>
    <section class="container-xxl pb-6">
      <?php the_post_thumbnail(); ?>
    </section>

    <?php wp_link_pages(); ?>

    <section class="wrap-md my-5 long-read">
      <?php the_content(); ?>

    </section>

    <?php wp_link_pages(); ?>
  </article>

  <?php if (has_tag()) { ?>
    <div class="wrap-md footer-metas my-5 text-muted">
      <i class="bi bi-tag"></i>
      <?php the_tags('Tagged: ', ', '); ?>
    </div>
  <?php  }; ?>


  <?php
    // This continues in the single post loop
    if ( comments_open() || get_comments_number() ) :

    //comments_template();
    comments_template('/loops/single-post-comments.php');

    endif;
  endwhile; else :
    get_template_part('loops/404');
  endif;
  ?>

  <footer class="container my-5">
    <div class="wrap-md author-bio d-flex border-top pt-5">
      <div class="border rounded-circle overflow-hidden">
        <?php b5st_author_bio_avatar(); ?>
      </div>
      <div class="ms-3">
        <p class="h4 author-name"><?php _e('Author: ', 'b5st'); the_author(); ?></p>
        <?php if (b5st_author_description()) {
          ?>
          <div class="author-description"><?php b5st_author_description(); ?></div>
          <?php
        } ?>
        <p class="author-other-posts mb-0"><?php _e('Other posts by ', 'b5st'); the_author_posts_link(); ?></p>
      </div>
    </div><!-- /.author-bio -->

    <div class="row my-5 border-top border-bottom py-3">
      <div class="col text-start">
        <?php previous_post_link('%link', '<i class="bi bi-arrow-left"></i> Previous post: '.'%title'); ?>
      </div>
      <div class="col text-end">
        <?php next_post_link('%link', 'Next post: '.'%title'.' <i class="bi bi-arrow-right"></i>'); ?>
      </div>
    </div>

  </footer>

  <?php if(is_active_sidebar('mainbody-widget-area-1')): ?>
    <section id="site-main-widgets">
      <div class="container">
        <div class="row pt-5 pb-4" id="mainbody-widget-area-1" role="navigation">
          <?php
            b5st_mainbody_widgets_1_before();
            dynamic_sidebar('mainbody-widget-area-1');
            b5st_mainbody_widgets_1_after();
          ?>
        </div>
      </div>
    </section>
  <?php endif; ?>