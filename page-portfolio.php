<?php
/**
 * Template Name: Portfolio
 *
 * @package coffee_shop
 */

get_header();
?>

	<main id="primary" class="site-main portfolio-page">

		<div class="portfolio-container">
			<header class="portfolio-header">
				<h1><?php the_title(); ?></h1>
				<p class="portfolio-subtitle">Webfejlesztő & PHP szakértő</p>
			</header>

			<div class="portfolio-app">
				<section class="about-section">
					<h2>Rólam</h2>
					<p>Szakértő webfejlesztő, aki specializálódott a PHP és React fejlesztésre. WordPress alapú rendszerek és modern webalkalmazások készítésével foglalkozom.</p>
				</section>

				<section class="skills-section">
					<h2>Készségek</h2>
					<div class="skills-grid">
						<div class="skill-card">
							<span class="skill-icon icon-php" aria-hidden="true"></span>
							<h3>PHP</h3>
							<div class="skill-bar">
								<div class="skill-progress" style="width: 90%"></div>
							</div>
							<span class="skill-level">90%</span>
						</div>
						<div class="skill-card">
							<span class="skill-icon icon-react" aria-hidden="true"></span>
							<h3>React</h3>
							<div class="skill-bar">
								<div class="skill-progress" style="width: 85%"></div>
							</div>
							<span class="skill-level">85%</span>
						</div>
						<div class="skill-card">
							<span class="skill-icon icon-js" aria-hidden="true"></span>
							<h3>JavaScript</h3>
							<div class="skill-bar">
								<div class="skill-progress" style="width: 95%"></div>
							</div>
							<span class="skill-level">95%</span>
						</div>
						<div class="skill-card">
							<span class="skill-icon icon-wp" aria-hidden="true"></span>
							<h3>WordPress</h3>
							<div class="skill-bar">
								<div class="skill-progress" style="width: 88%"></div>
							</div>
							<span class="skill-level">88%</span>
						</div>
						<div class="skill-card">
							<span class="skill-icon icon-db" aria-hidden="true"></span>
							<h3>MySQL</h3>
							<div class="skill-bar">
								<div class="skill-progress" style="width: 80%"></div>
							</div>
							<span class="skill-level">80%</span>
						</div>
						<div class="skill-card">
							<span class="skill-icon icon-css" aria-hidden="true"></span>
							<h3>CSS/SASS</h3>
							<div class="skill-bar">
								<div class="skill-progress" style="width: 85%"></div>
							</div>
							<span class="skill-level">85%</span>
						</div>
					</div>
				</section>

				<section class="projects-section">
					<h2>Projektek</h2>
					<div class="projects-grid">
						<div class="project-card">
							<h3>E-commerce Platform</h3>
							<p class="project-description">PHP alapú webshop modern frontenddel</p>
							<div class="project-technologies">
								<span class="tech-tag">PHP</span>
								<span class="tech-tag">React</span>
								<span class="tech-tag">MySQL</span>
							</div>
							<button class="view-code-btn" onclick="toggleCode(0)">Kód megtekintése</button>
							<div class="code-block" id="code-0" style="display: none;">
								<pre><code>&lt;?php
class Product {
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function display() {
        return "&lt;div class='product'&gt;
            &lt;h3&gt;{$this->name}&lt;/h3&gt;
            &lt;p&gt;Price: $ {$this->price}&lt;/p&gt;
        &lt;/div&gt;";
    }
}

// React komponens
const ProductCard = ({ product }) => {
    return (
        &lt;div className="product-card"&gt;
            &lt;h3&gt;{product.name}&lt;/h3&gt;
            &lt;p&gt;Price: ${product.price}&lt;/p&gt;
        &lt;/div&gt;
    );
};</code></pre>
								<button class="copy-btn" onclick="copyCode('code-0')">Másolás</button>
							</div>
						</div>

						<div class="project-card">
							<h3>Blog System</h3>
							<p class="project-description">Dinamikus blog rendszer WordPress alapokon</p>
							<div class="project-technologies">
								<span class="tech-tag">WordPress</span>
								<span class="tech-tag">PHP</span>
								<span class="tech-tag">REST API</span>
							</div>
							<button class="view-code-btn" onclick="toggleCode(1)">Kód megtekintése</button>
							<div class="code-block" id="code-1" style="display: none;">
								<pre><code>&lt;?php
// Custom Post Type
function create_blog_post_type() {
    register_post_type('blog',
        array(
            'labels' => array(
                'name' => __('Blog Posts'),
                'singular_name' => __('Blog Post')
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}
add_action('init', 'create_blog_post_type');

// React API hívás
const fetchPosts = async () => {
    const response = await fetch('/wp-json/wp/v2/posts');
    const posts = await response.json();
    return posts;
};</code></pre>
								<button class="copy-btn" onclick="copyCode('code-1')">Másolás</button>
							</div>
						</div>

						<div class="project-card">
							<h3>Admin Dashboard</h3>
							<p class="project-description">Admin felület React komponensekkel</p>
							<div class="project-technologies">
								<span class="tech-tag">React</span>
								<span class="tech-tag">PHP</span>
								<span class="tech-tag">Chart.js</span>
							</div>
							<button class="view-code-btn" onclick="toggleCode(2)">Kód megtekintése</button>
							<div class="code-block" id="code-2" style="display: none;">
								<pre><code>&lt;?php
// API endpoint
add_action('rest_api_init', function () {
    register_rest_route('api/v1', '/stats', array(
        'methods' => 'GET',
        'callback' => 'get_stats'
    ));
});

function get_stats($request) {
    return new WP_REST_Response(array(
        'users' => count_users(),
        'posts' => wp_count_posts(),
        'views' => get_view_count()
    ), 200);
}

// React Chart komponens
const StatsChart = ({ data }) => {
    return (
        &lt;div className="stats-chart"&gt;
            &lt;h2&gt;Statisztikák&lt;/h2&gt;
            {data.map((stat, index) => (
                &lt;div key={index} className="stat-item"&gt;
                    &lt;span&gt;{stat.label}: &lt;/span&gt;
                    &lt;strong&gt;{stat.value}&lt;/strong&gt;
                &lt;/div&gt;
            ))}
        &lt;/div&gt;
    );
};</code></pre>
								<button class="copy-btn" onclick="copyCode('code-2')">Másolás</button>
							</div>
						</div>
					</div>
				</section>

				<section class="contact-section">
					<h2>Kapcsolat</h2>
					<p>Érdekel a közös munka? Lépj kapcsolatba velem!</p>
					<div class="contact-links">
						<a href="mailto:email@example.com" class="contact-link"><span class="contact-icon icon-mail" aria-hidden="true"></span> email@example.com</a>
						<a href="#" class="contact-link"><span class="contact-icon icon-link" aria-hidden="true"></span> GitHub</a>
						<a href="#" class="contact-link"><span class="contact-icon icon-brief" aria-hidden="true"></span> LinkedIn</a>
					</div>
				</section>
			</div>
		</div>

	</main><!-- #main -->

	<script>
		function toggleCode(index) {
			const codeBlock = document.getElementById('code-' + index);
			const button = codeBlock.previousElementSibling;
			if (codeBlock.style.display === 'none') {
				codeBlock.style.display = 'block';
				button.textContent = 'Bezár kód';
			} else {
				codeBlock.style.display = 'none';
				button.textContent = 'Kód megtekintése';
			}
		}

		function copyCode(codeId) {
			const codeBlock = document.getElementById(codeId);
			const code = codeBlock.querySelector('code').textContent;
			navigator.clipboard.writeText(code).then(() => {
				const button = codeBlock.querySelector('.copy-btn');
				const originalText = button.textContent;
				button.textContent = 'Másolva!';
				setTimeout(() => {
					button.textContent = originalText;
				}, 2000);
			});
		}
	</script>

<?php
get_footer();
