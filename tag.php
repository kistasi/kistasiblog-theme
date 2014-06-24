<?php get_header(); ?>
<?php get_sidebar(); ?>

<h2 class="archive-title"><?php printf( __( 'Tag Archives: %s', 'kistasiblog-theme' ), single_tag_title( '', false ) ); ?></h2>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if ( in_category('3') ): ?>
<?php else: ?>

<article id="post-<?php the_ID(); ?>" class="post">
<?php endif; ?>
  <header class="post-header">
    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
    <small class="date-author"><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
  </header>
  <div class="post-content">
    <?php the_content(); ?>
  </div>
  <footer class="post-footer">
    <span class="postmetadata">Posted in <?php the_category(', '); ?></span>
  </footer>
</article>

<?php endwhile; else: ?>
      <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
<span id="pager-older"><?php next_posts_link( 'Older posts' ); ?></span>
<span id="pager-newer"><?php previous_posts_link( 'Newer posts' ); ?></span>
<?php get_footer(); ?>
