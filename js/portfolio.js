/**
 * Portfolio React Component
 */

// Access React and ReactDOM from global scope
const React = window.React;
const ReactDOM = window.ReactDOM;

const portfolioData = {
    name: "David",
    title: "Full Stack Web Developer",
    skills: [
        { name: "PHP", level: 90, icon: "icon-php" },
        { name: "React", level: 85, icon: "icon-react" },
        { name: "JavaScript", level: 95, icon: "icon-js" },
        { name: "WordPress", level: 88, icon: "icon-wp" },
        { name: "MySQL", level: 80, icon: "icon-db" },
        { name: "CSS/SASS", level: 85, icon: "icon-css" }
    ],
    projects: [
        {
            title: "E-commerce Platform",
            description: "PHP alapú webshop modern frontenddel",
            technologies: ["PHP", "React", "MySQL"],
            code: `<?php
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
        return "<div class='product'>
            <h3>{$this->name}</h3>
            <p>Price: $ {$this->price}</p>
        </div>";
    }
}

// React komponens
const ProductCard = ({ product }) => {
    return (
        <div className="product-card">
            <h3>{product.name}</h3>
            <p>Price: ${product.price}</p>
        </div>
    );
};`
        },
        {
            title: "Blog System",
            description: "Dinamikus blog rendszer WordPress alapokon",
            technologies: ["WordPress", "PHP", "REST API"],
            code: `<?php
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
};`
        },
        {
            title: "Admin Dashboard",
            description: "Admin felület React komponensekkel",
            technologies: ["React", "PHP", "Chart.js"],
            code: `<?php
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
        <div className="stats-chart">
            <h2>Statisztikák</h2>
            {data.map((stat, index) => (
                <div key={index} className="stat-item">
                    <span>{stat.label}: </span>
                    <strong>{stat.value}</strong>
                </div>
            ))}
        </div>
    );
};`
        }
    ]
};

function PortfolioApp() {
    const [activeProject, setActiveProject] = React.useState(null);
    const [copiedCode, setCopiedCode] = React.useState(null);

    const copyCode = (code, projectId) => {
        navigator.clipboard.writeText(code);
        setCopiedCode(projectId);
        setTimeout(() => setCopiedCode(null), 2000);
    };

    return React.createElement('div', { className: 'portfolio-app' },
        React.createElement('section', { className: 'about-section' },
            React.createElement('h2', null, 'Rólam'),
            React.createElement('p', null, 
                'Szakértő webfejlesztő, aki specializálódott a PHP és React fejlesztésre. ' +
                'WordPress alapú rendszerek és modern webalkalmazások készítésével foglalkozom.'
            )
        ),

        React.createElement('section', { className: 'skills-section' },
            React.createElement('h2', null, 'Készségek'),
            React.createElement('div', { className: 'skills-grid' },
                portfolioData.skills.map((skill, index) =>
                    React.createElement('div', { className: 'skill-card', key: index },
                        React.createElement('span', { className: 'skill-icon ' + skill.icon, 'aria-hidden': 'true' }),
                        React.createElement('h3', null, skill.name),
                        React.createElement('div', { className: 'skill-bar' },
                            React.createElement('div', {
                                className: 'skill-progress',
                                style: { width: skill.level + '%' }
                            })
                        ),
                        React.createElement('span', { className: 'skill-level' }, skill.level + '%')
                    )
                )
            )
        ),

        React.createElement('section', { className: 'projects-section' },
            React.createElement('h2', null, 'Projektek'),
            React.createElement('div', { className: 'projects-grid' },
                portfolioData.projects.map((project, index) =>
                    React.createElement('div', { className: 'project-card', key: index },
                        React.createElement('h3', null, project.title),
                        React.createElement('p', { className: 'project-description' }, project.description),
                        React.createElement('div', { className: 'project-technologies' },
                            project.technologies.map((tech, techIndex) =>
                                React.createElement('span', { className: 'tech-tag', key: techIndex }, tech)
                            )
                        ),
                        React.createElement('button', {
                            className: 'view-code-btn',
                            onClick: () => setActiveProject(activeProject === index ? null : index)
                        }, activeProject === index ? 'Bezár kód' : 'Kód megtekintése'),
                        activeProject === index && React.createElement('div', { className: 'code-block' },
                            React.createElement('pre', null,
                                React.createElement('code', null, project.code)
                            ),
                            React.createElement('button', {
                                className: 'copy-btn',
                                onClick: () => copyCode(project.code, index)
                            }, copiedCode === index ? 'Másolva!' : 'Másolás')
                        )
                    )
                )
            )
        ),

        React.createElement('section', { className: 'contact-section' },
            React.createElement('h2', null, 'Kapcsolat'),
            React.createElement('p', null, 'Érdekel a közös munka? Lépj kapcsolatba velem!'),
            React.createElement('div', { className: 'contact-links' },
                React.createElement('a', { href: 'mailto:email@example.com', className: 'contact-link' },
                    React.createElement('span', { className: 'contact-icon icon-mail', 'aria-hidden': 'true' }),
                    ' email@example.com'
                ),
                React.createElement('a', { href: '#', className: 'contact-link' },
                    React.createElement('span', { className: 'contact-icon icon-link', 'aria-hidden': 'true' }),
                    ' GitHub'
                ),
                React.createElement('a', { href: '#', className: 'contact-link' },
                    React.createElement('span', { className: 'contact-icon icon-brief', 'aria-hidden': 'true' }),
                    ' LinkedIn'
                )
            )
        )
    );
}

// Render the app (React 18)
document.addEventListener('DOMContentLoaded', function() {
    const root = document.getElementById('portfolio-app');
    if (root) {
        const rootElement = ReactDOM.createRoot(root);
        rootElement.render(React.createElement(PortfolioApp));
    }
});
