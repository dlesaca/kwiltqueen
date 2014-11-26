		<div id="mobile-media">
			<ul>
				<li class="faq"><a href="faq.php">FAQ</a></li>
				<li><a href="javascript:;"><img class="media" src="<?php bloginfo('template_directory'); ?>/img/pint-icon.svg" alt="pintrest" /></a></li>
				<li><a href="javascript:;"><img class="media" src="<?php bloginfo('template_directory'); ?>/img/twit-icon.svg" alt="twitter" /></a></li>
				<li><a href="javascript:;"><img class="media" src="<?php bloginfo('template_directory'); ?>/img/insta-icon.svg" alt="instagram" /></a></li>
			</ul>
		</div>	
		</div> <!-- middle -->
		<div id="footer">
			<footer>
				<div id="link-farm">
					<div id="footer-nav-1">
						<?php ( dynamic_sidebar( 'left-footer-nav' )); ?> 
					</div>

					<div id="footer-nav-2">
						<ul>
							<?php ( dynamic_sidebar( 'middle-footer-nav' )); ?> 
						</ul>
					</div>

					<div id="footer-nav-3">
						<ul>
							<?php ( dynamic_sidebar( 'right-footer-nav' )); ?> 
						</ul>
					</div>
					<div id="footer-nav-4">
						<ul>
							<li>Krista Moser</li>
							<li>123 Quilting LN.</li>
							<li>Marysville, WA</li>
							<li>98000</li>
							<li>206-444-4444</li>
						</ul>
					</div>
					<div id="footer-nav-5">
						<h1>Newsletter</h1>
						<input type="text" title="Name" /><br>
						<input type="text" title-"email" /><br>
						<button>Subcribe</button>

					</div>
				</div>
				<div id="copy">
					<ul>
						<li>Copyright &copy; <?php echo date( 'Y' ); ?> </li>
						<li>All Rights Reserved</li>
						<li>Crafted by Dexter</li>
						<li><a href="http://validator.w3.org/check?uri=referer"><img src="<?php bloginfo('template_directory'); ?>/img/html5-icon.png" alt="valid HTML5" /></a></li>
						<li><a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3"><img src="<?php bloginfo('template_directory'); ?>/img/css3-icon.png" alt="Valid CSS3" /></a></li>
					</ul>
				</div>
			</footer>
		</div>
		<?php wp_footer() ;?>
	</body>
</html>