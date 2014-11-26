<?php get_header(); ?>
<?php get_template_part( 'nav', 'sub' ); ?>
<div id="content">
	<div id="bc">
		<?php the_breadcrumb(); ?>
	</div>

	<h1>In my mind</h1>
	<hr>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'post' ); ?>

	<?php endwhile; else: ?>

		<p>There are no posts</p>

	<?php endif; ?>
</div>

<?php get_footer(); ?>