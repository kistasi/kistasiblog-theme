<?php get_header(); ?>
<?php get_sidebar(); ?>
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
<?php get_footer(); ?>
