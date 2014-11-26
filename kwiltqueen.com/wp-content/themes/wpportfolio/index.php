<?php get_header(); ?>
<?php get_template_part( 'nav', 'sub' ); ?>
<div id="content">

	<p>this is the index.php</p>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h1><?php the_title(); ?></h1>
		<hr>
		<?php the_content(); ?>
		<hr>

	<?php endwhile; else: ?>

		<p>There are no posts</p>

	<?php endif; ?>
</div>

<?php get_footer(); ?>