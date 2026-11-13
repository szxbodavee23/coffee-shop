/**
 * Dark mode toggle for the coffee shop theme.
 *
 * The saved preference is applied by an inline script in header.php
 * (before paint, to avoid a flash of the wrong theme).
 */

const THEME_STORAGE_KEY = 'coffee-shop-theme';

function toggleTheme() {
	const isDark = document.body.classList.toggle( 'dark-mode' );
	try {
		localStorage.setItem( THEME_STORAGE_KEY, isDark ? 'dark' : 'light' );
	} catch ( e ) {}
}
