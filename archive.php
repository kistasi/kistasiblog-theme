<?php get_header(); ?>
<?php get_sidebar(); ?>

<h2 class="archive-title">
<?php
  if ( is_day() ) :
    printf( __( 'Archívum: %s', 'kistasiblog-theme' ), get_the_date() );
  elseif ( is_month() ) :
    printf( __( 'Archívum: %s', 'kistasiblog-theme' ), get_the_date( _x( 'Y. m', 'monthly archives date format', 'kistasiblog-theme' ) ) );
  elseif ( is_year() ) :
    printf( __( 'Archívum: %s', 'kistasiblog-theme' ), get_the_date( _x( 'Y', 'yearly archives date format', 'kistasiblog-theme' ) ) );
  else :
    _e( 'Archívum:', 'kistasiblog-theme' );
  endif;
?>
</h2>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if ( in_category('3') ): ?>
<?php else: ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php endif; ?>
  <header class="post-header">
    <h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
    <span class="post-date"><?php the_time('Y. m. d') ?></span>
  </header>
  <div class="post-content">
    <?php the_content(); ?>
  </div>
  <footer class="post-footer">
    <span class="post-category">Kategóra: <?php the_category(', '); ?></span>
    <span class="post-tags"><?php the_tags(); ?></span>
  </footer>
</article>

<?php endwhile; else: ?>
  <p>Bocsi, egy bejegyzés sem található ebben az archívumban.</p>
<?php endif; ?>
<span id="pager-older"><?php next_posts_link( 'Régebbi bejegyzések' ); ?></span>
<span id="pager-newer"><?php previous_posts_link( 'Újabb bejegyzések' ); ?></span>
<?php get_footer(); ?>
