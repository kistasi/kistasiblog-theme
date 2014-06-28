<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if ( in_category('3') ): ?>
<?php else: ?>

<article id="post-<?php the_ID(); ?>" class="post">
<?php endif; ?>
  <header class="post-header">
    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
    <small class="post-date"><?php the_time('Y. m. d') ?></small>
  </header>
  <div class="post-content">
    <?php the_content(); ?>
  </div>
  <footer class="post-footer">
    <span class="post-category">Kategória: <?php the_category(', '); ?></span>
    <span class="post-tags"><?php the_tags(); ?></span>
  </footer>
</article>

<?php endwhile; else: ?>
  <p>Bocsi, nincs megjeleníthető bejegyzés a blogon.</p>
<?php endif; ?>
<span id="pager-older"><?php next_posts_link( 'Régebbi bejegyzések' ); ?></span>
<span id="pager-newer"><?php previous_posts_link( 'Újabb bejegyzések' ); ?></span>
<?php get_footer(); ?>
