<! DOCTYPE html>
<html>
	<head>
		<title>
			<?php

				wp_title( '-', true, 'right' );

				bloginfo( 'name' );

			?>

		</title>
		<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="mobile-logo">
			<a href="index.php"><img src="<?php bloginfo('template_directory'); ?>/img/kq-logo.svg" alt="Kwilt Queen Logo" /></a>
			<h1>Kwilt Queen</h1>
		</div>
		<div id="header">
			<header>
				<div id="logo">
					<a href="<?php bloginfo( 'siteurl' ); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/kq-logo.svg" alt="<?php bloginfo( 'title' ); ?> Logo" /></a>
					<h1><?php bloginfo( 'title' ); ?></h1>
				</div>
			</header>
			<img id="toggle" src="<?php bloginfo('template_directory'); ?>/img/img-toggle.png" width="25" height="25" alt="Toggle Menu">
			<nav id="nav-main">

				<?php

					$args = array(
						'menu' => 'main-menu'
					);

					wp_nav_menu( '$args' );
				?>
			</nav>
		</div> <!-- header -->
		<div id="middle">