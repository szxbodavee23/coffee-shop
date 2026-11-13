<?php
/**
 * Front Page Template
 *
 * @package coffee_shop
 */

get_header();
?>

	<main id="primary" class="site-main coffee-homepage">
		<!-- Hero Section with Geometric Shapes -->
		<section class="hero-section">
			<div class="geometric-shape shape-1"></div>
			<div class="geometric-shape shape-2"></div>
			<div class="geometric-shape shape-3"></div>
			<div class="geometric-shape shape-4"></div>
			<div class="hero-content">
				<h1>Igazi Kávéélmény</h1>
				<p>Kényeztesd magad a világ legjobb kávéival</p>
				<a href="<?php echo home_url('/termekek'); ?>" class="cta-button">Termékeink megtekintése</a>
			</div>
		</section>

		<!-- Featured Products Section -->
		<section class="featured-section">
			<div class="geometric-shape shape-5"></div>
			<h2>Kiemelt Termékeink</h2>
			<div class="featured-grid">
				<div class="featured-card">
					<div class="card-shape"></div>
					<h3>Espresso</h3>
					<p>Intenzív és gazdag ízvilág</p>
					<span class="price">650 Ft</span>
				</div>
				<div class="featured-card">
					<div class="card-shape"></div>
					<h3>Cappuccino</h3>
					<p>Tökéletes harmónia tejjel</p>
					<span class="price">750 Ft</span>
				</div>
				<div class="featured-card">
					<div class="card-shape"></div>
					<h3>Latte Macchiato</h3>
					<p>Elegáns és krémes</p>
					<span class="price">850 Ft</span>
				</div>
			</div>
		</section>

		<!-- About Preview Section -->
		<section class="about-preview">
			<div class="geometric-shape shape-6"></div>
			<div class="about-content">
				<h2>Rólunk</h2>
				<p>1990 óta készítjük a világ legjobb kávéit. Hisszük, hogy minden csésze kávé egy különleges élmény.</p>
				<a href="<?php echo home_url('/rolunk'); ?>" class="cta-button-secondary">Tudj meg többet</a>
			</div>
		</section>
	</main><!-- #main -->

<?php
get_footer();
