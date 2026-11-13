<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until main content.
 *
 * @package coffee_shop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<script>
	(function () {
		try {
			if ( localStorage.getItem( 'coffee-shop-theme' ) !== 'light' ) {
				document.body.classList.add( 'dark-mode' );
			}
		} catch ( e ) {
			document.body.classList.add( 'dark-mode' );
		}
	})();
</script>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'coffee-shop' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="modern-navbar">
			<div class="navbar-container">
				<a href="<?php echo home_url(); ?>" class="navbar-logo">
					<span class="coffee-icon large">
						<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path d="M2,21H20V19H2M20,8H18V5H20M20,3H4V13A4,4 0 0,0 8,17H14A4,4 0 0,0 18,13V10H20A2,2 0 0,0 22,8V5C22,3.89 21.1,3 20,3Z"/>
						</svg>
					</span>
					Kávézó
				</a>
				<ul class="navbar-menu">
					<li><a href="<?php echo home_url(); ?>">Kezdőlap</a></li>
					<li><a href="<?php echo home_url('/termekek'); ?>">Termékek</a></li>
					<li><a href="<?php echo home_url('/rolunk'); ?>">Rólunk</a></li>
					<li><button class="theme-toggle" onclick="toggleTheme()" aria-label="Téma váltása"><span class="theme-toggle-icon" aria-hidden="true"></span></button></li>
				</ul>
			</div>
		</nav>
	</header><!-- #masthead -->
