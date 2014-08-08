<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
		<h3 class="page-title"><?php the_title(); ?></h3>
	</header>
	<div class="page-content">
		<?php the_content(); ?>
	</div>
</div>

<?php endwhile; else: ?>
	<h3>404 - A kért oldal nem található!</h3>
	<p>Bocsi, de ez az oldal már nem létezik, vagy talán soha nem is létezett.</p>
<?php endif; ?>

<?php get_footer(); ?>