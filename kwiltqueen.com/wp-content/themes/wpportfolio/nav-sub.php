		<nav id="sub-nav">
			<div id="sub-nav-border">
				<div id="icon">
					<h1>KQ</h1>
				</div>
				<div id="crown-icon">
					<hr class="crown" />
				</div>
				<ul>
					<?php if (is_page( 'about' ) || is_page( 'the-process' ) || is_page( 'stories' )): ?>
		 				<?php if( dynamic_sidebar( 'about-sub-nav' )): ?> 

		 				<?php else: ?>

		 					<p>no content</p>

		 				<?php endif; ?>
	 				<?php endif; ?>
					<?php if (is_page( 'services' ) || is_page( 'quilting' ) || is_page( 'pattern-making' ) || is_page( 'consulting' )): ?>
		 				<?php if( dynamic_sidebar( 'services-sub-nav' )): ?> 

		 				<?php else: ?>

		 					<p>no content</p>

		 				<?php endif; ?>
	 				<?php endif; ?>
	 				<?php if (is_page( 'contact' )): ?>
		 				<ul class="contact-side">
		 					<li>Krista Moser</li>
		 					<li>Ph: 425-232-2222</li>
		 				</ul>
	 				<?php endif; ?>
					<?php if (is_home()): ?>
		 				<?php if( dynamic_sidebar( 'categories-widget' )): ?> 
		 				<?php else: ?>

		 					<p>no content</p>

		 				<?php endif; ?>
	 				<?php endif; ?>
 				</ul>
			</div>
		</nav>