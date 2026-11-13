<?php
/**
 * Template Name: Termékek
 *
 * @package coffee_shop
 */

get_header();
?>

	<main id="primary" class="site-main products-page">
		<div class="geometric-shape shape-7"></div>
		<div class="geometric-shape shape-8"></div>

		<header class="products-header">
			<h1>Termékeink</h1>
			<p>Válassz a különleges kávéink közül</p>
		</header>

		<section class="products-section">
			<div class="products-grid">
				<!-- Hot Coffees -->
				<div class="product-category">
					<h2>Forró Kávék</h2>
					<div class="category-products">
						<div class="product-card">
							<div class="product-shape"></div>
							<h3>Espresso</h3>
							<p class="product-desc">Intenzív, tömény kávé</p>
							<span class="product-price">650 Ft</span>
						</div>
						<div class="product-card">
							<div class="product-shape"></div>
							<h3>Espresso Doppio</h3>
							<p class="product-desc">Dupla adag espresso</p>
							<span class="product-price">800 Ft</span>
						</div>
						<div class="product-card">
							<div class="product-shape"></div>
							<h3>Americano</h3>
							<p class="product-desc">Espresso vízzel hígítva</p>
							<span class="product-price">700 Ft</span>
						</div>
						<div class="product-card">
							<div class="product-shape"></div>
							<h3>Cappuccino</h3>
							<p class="product-desc">Espresso tejjel és habbal</p>
							<span class="product-price">750 Ft</span>
						</div>
						<div class="product-card">
							<div class="product-shape"></div>
							<h3>Latte</h3>
							<p class="product-desc">Krémes kávé tejjel</p>
							<span class="product-price">800 Ft</span>
						</div>
						<div class="product-card">
							<div class="product-shape"></div>
							<h3>Latte Macchiato</h3>
							<p class="product-desc">Rétegezett kávé specialty</p>
							<span class="product-price">850 Ft</span>
						</div>
					</div>
				</div>

				<!-- Cold Coffees -->
				<div class="product-category">
					<h2>Hűtött Kávék</h2>
					<div class="category-products">
						<div class="product-card">
							<div class="product-shape"></div>
							<h3>Iced Latte</h3>
							<p class="product-desc">Hideg latte jéggel</p>
							<span class="product-price">900 Ft</span>
						</div>
						<div class="product-card">
							<div class="product-shape"></div>
							<h3>Cold Brew</h3>
							<p class="product-desc">Hosszú áztatású kávé</p>
							<span class="product-price">950 Ft</span>
						</div>
						<div class="product-card">
							<div class="product-shape"></div>
							<h3>Frappé</h3>
							<p class="product-desc">Jéghideg habos kávé</p>
							<span class="product-price">1000 Ft</span>
						</div>
					</div>
				</div>

				<!-- Specialties -->
				<div class="product-category">
					<h2>Specialitások</h2>
					<div class="category-products">
						<div class="product-card">
							<div class="product-shape"></div>
							<h3>Mocha</h3>
							<p class="product-desc">Kávé csokoládéval</p>
							<span class="product-price">950 Ft</span>
						</div>
						<div class="product-card">
							<div class="product-shape"></div>
							<h3>Vienna Coffee</h3>
							<p class="product-desc">Habos kávé tejszínhabbal</p>
							<span class="product-price">900 Ft</span>
						</div>
						<div class="product-card">
							<div class="product-shape"></div>
							<h3>Irish Coffee</h3>
							<p class="product-desc">Kávé whiskivel</p>
							<span class="product-price">1200 Ft</span>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main><!-- #main -->

<?php
get_footer();
