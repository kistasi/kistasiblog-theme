<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post-header">
		<h3 class="post-title"><?php the_title(); ?></h3>
		<span class="post-date"><?php the_time('Y. m. d'); ?></span>
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
	<h3>404 - A kért oldal nem található!</h3>
 	<p>Bocsi, de ez az oldal már nem létezik, vagy talán soha nem is létezett.</p>
<?php endif; ?>

<?php get_footer(); ?>
