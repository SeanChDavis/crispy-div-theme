<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Crispy_Div
 */

?>

<footer id="colophon" class="site-footer element-spacing no-vertical-spacing">
	<div class="fat-footer">
		<div class="fat-footer-grid">
			<div class="crispy-div-info">
				<p class="site-title">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img class="site-logo" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/branding/crispy-div-logo-color.svg' ); ?>" alt="<?php echo esc_attr( THEME_NAME . ' home' ); ?>"/></a>
				</p>
				<div class="site-description">
					<p><?php echo crispydiv_site_description(); ?>
						<a href="<?php echo esc_url( THEME_CONTACT_URL ); ?>">Reach out</a>.</p>
					<p><strong>Are you running a business in WordPress?</strong> Our latest plugin organizes what your team needs to know, makes the knowledge available to the right people, and ensures it was actually received. Check out <a href="https://keystone.crispydiv.com/" target="_blank">Keystone – the internal knowledge base for WordPress</a>.</p>
				</div>
			</div>
			<div class="crispy-div-links">
				<span class="footer-list-title h6">Services</span>
				<?php
				wp_nav_menu(array(
						'theme_location' => 'services-menu',
						'menu_id'        => 'services-menu',
				));
				?>
			</div>
			<div class="crispy-div-footer-menu">
				<span class="footer-list-title h6">Site Links</span>
				<?php
				wp_nav_menu(array(
						'theme_location' => 'footer-menu',
						'menu_id'        => 'footer-menu',
				));
				?>
			</div>
			<div class="crispy-div-company">
				<span class="footer-list-title h6">Company</span>
				<?php
				wp_nav_menu(array(
						'theme_location' => 'company-menu',
						'menu_id'        => 'company-menu',
				));
				?>
			</div>
		</div>
	</div>
	<div class="site-info">
		<p class="site-copyright"><?php echo '&copy; ' . esc_html( get_bloginfo( 'name' ) ) . ' ' . wp_date( 'Y' ); ?> - <?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
	</div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
