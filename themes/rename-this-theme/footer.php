		<footer>			
			<div class="container">
				<div class="left">
					<h4><a href="<?php site_url(); ?>/">Site Name</a></h4>
					<a href="tel:<?php echo get_theme_mod( 'phone_number' ); ?>" class="footer-phone"><?php echo get_theme_mod( 'phone_number' ); ?></a>
					<p>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></p>
				</div>
				<div class="right">
					<?php wp_nav_menu(array('menu'=>'social-menu')); ?>
				</div>
				<div class="clear"></div>
			</div>
		</footer>

	</div>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
