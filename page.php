<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
		<h3 class="page-title"><?php the_title(); ?></h3>
	</header>
	<div class="page-content">
		<?php the_content(); ?>
	</div>
</div>
<?php get_footer(); ?>