<?php 

/*

	Template Name: Work Page

*/


get_header(); ?>
<?php get_template_part( 'nav', 'sub' ); ?>
<div id="content">
	<div id="bc">
		<?php the_breadcrumb(); ?>
	</div>
	<?php

		$args = array(
			'post_type' => 'work'
		);

		$the_query = new WP_Query ( $args );

	?>

	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<h1><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h1>

			<img class="not-home" src="<?php the_field( 'slider_image' ); ?>" alt"<?php the_title(); ?>"/>
		
		<p><?php the_field( 'description' ); ?></p>
		<hr>

	<?php endwhile; else: ?>

		<p>There are no posts</p>

	<?php endif; ?>
</div>

<?php get_footer(); ?>