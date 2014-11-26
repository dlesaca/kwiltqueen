<?php get_header(); ?>

		<div class="flexslider">
			<ul class="slides">
			<?php

				$args = array(
					'post_type' => 'work'
				);

				$the_query = new WP_Query ( $args );

			?>

			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<img src="<?php the_field( 'slider_image' ); ?>" alt="<?php the_title(); ?> Project screenshot" />
				</a>
			</li>
			<?php endwhile; endif; ?>
			</ul>
		</div>
		<div id="widgets">
			<div id="about-box" class="home-widget">
				<h1><?php echo get_the_title( 6 ); ?></h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis enim sem, facilisis vitae tellus in, bibendum sollicitudin erat. Praesent ac varius diam. <a href="<?php echo get_permalink( 6 ); ?>">More>></a></p>
			</div>
			<div id="igwidget" class="home-widget">
				<?php if( dynamic_sidebar( 'ig_widget' )): ?> 

				<?php else: ?>

					<p>no content</p>

				<?php endif; ?>
			</div>
			<div id="twiGet" class="home-widget">
				<?php if( dynamic_sidebar( 'twi_widget' )): ?> 

				<?php else: ?>

					<p>no content</p>

				<?php endif; ?>
			</div>
		</div>

<?php get_footer(); ?>