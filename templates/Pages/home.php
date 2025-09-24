<?php
/**
 * Home Page - CakePHP Learning Lab
 * Common elements (header, CSS, HTML structure) are in the default layout.
*/
// Set page title
$this->assign('title', 'Home - CakePHP Lab');
?>

<!-- Features Section -->
<section class="features">
    <div class="container">
        <h2 style="text-align: center; color: #2c3e50; margin-bottom: 1rem;">What I'm Learning</h2>
        <p style="text-align: center; color: #666; max-width: 600px; margin: 0 auto;">
            This project helps me understand CakePHP concepts through hands-on practice with real features.
        </p>

        <div class="features-grid">
            <div class="feature-card">
                <h3>Authentication System</h3>
                <p>Complete user registration, login, logout, and session management with CakePHP's Authentication plugin.</p>
            </div>

            <div class="feature-card">
                <h3>CRUD Operations</h3>
                <p>Full Create, Read, Update, Delete functionality with form handling, validation, and database operations.</p>
            </div>

            <div class="feature-card">
                <h3>MVC Architecture</h3>
                <p>Understand CakePHP's Model-View-Controller pattern and convention over configuration approach.</p>
            </div>

            <div class="feature-card">
                <h3>ORM & Database</h3>
                <p>Learn CakePHP's powerful ORM, migrations, associations, and advanced database operations.</p>
            </div>

            <div class="feature-card">
                <h3>Templating System</h3>
                <p>Master CakePHP's templating engine, helpers, elements, and creating dynamic user interfaces.</p>
            </div>

            <div class="feature-card">
                <h3>Modern Development</h3>
                <p>Best practices, security, testing, and deployment strategies for professional CakePHP applications.</p>
            </div>
        </div>
    </div>
</section>

<!-- Technology Stack Section -->
<section class="tech-stack">
    <div class="container">
        <h2 style="color: #2c3e50; margin-bottom: 1rem;">Tech Stack I'm Using</h2>
        <p style="color: #666; margin-bottom: 2rem;">Technologies I'm practicing with in this project</p>

        <div class="tech-grid">
            <div class="tech-item">CakePHP 5.x</div>
            <div class="tech-item">PHP 8.1+</div>
            <div class="tech-item">MySQL</div>
            <div class="tech-item">HTML5</div>
            <div class="tech-item">CSS3</div>
            <div class="tech-item">JavaScript</div>
        </div>
    </div>
</section>
