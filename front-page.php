<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pretty_funxional
 */

get_header();
?>

<main id="primary" class="site-main landing-page">


    <div class="front-page">
        <div class="front-page-content">
            <div class="logo-container">
                <div class="logo hp-sec">
                    <h1>Pretty Funxional</h1>
                </div>
            </div>
            <div class="homepage-title-con">
                <div class="homepage-title hp-sec">
                    <h1>Organize, Manage, Do</h1>
                </div>
            </div>
            <div class="homepage-subtitle-con">
                <div class="homepage-subtitle">
                    <h1>Productivity in <span class="subtitle-color">color</span></h1>
                </div>
            </div>
            <div class="landing-page-btns-con">
                <button type="button" class="btn btn-templates btn-lg">
                    Templates
                </button>
                <button type="button" class="btn btn-blog btn-lg">Blog</button>
            </div>
        </div>
    </div>
    <div class="prod-con page-o">
        <div class="prod-content">
            <div class="prod-pic">
                <img
                    src="/Users/sirru/Local Sites/pretty-funxional-30/app/public/wp-content/themes/prettyfunx3/assets/13.png" />
            </div>
            <div class="prod-info">
                <div class="bs-title">
                    <h3>Our best sellers</h3>
                </div>
                <div class="temp-title">
                    <h2>Student Planner Template</h2>
                </div>
                <div class="temp-price">
                    <h3>$10</h3>
                </div>
                <div class="temp-desc">
                    <p>This Notion Student Planner Template is designed with a minimalist approach and user-friendliness
                        in mind, offering you a practical solution for tracking and organising your academic work.</p>
                </div>
                <div class="more-colors">
                    <img src="/Users/sirru/Local Sites/pretty-funxional-30/app/public/wp-content/themes/prettyfunx3/assets/colour-wheel.png"
                        alt="">
                    <p>More colors available</p>
                </div>
                <div class="temp-buttons">
                    <div class="buy-btn btn">Buy</div>
                    <div class="gts-btn btn">Go to shop</div>
                </div>
            </div>



        </div>
    </div>

    <div class="blog-con page-o">

        <div class="blog-text-con blog-content">
            <div class="lbp-con">
                <h4>Latests Blog Post</h4>
            </div>
            <div class="blog-text">
                <div class="blog-title">
                    <h3>How to actually use Notion</h3>
                </div>
                <div class="blog-excerpt">
                    <p>
                        The ultimate Notion template to help you capture your notes,
                        tasks, projects, and resources in one place. Lorem ipsum dolor
                        sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad...
                    </p>
                </div>
                <div class="read-more-con">
                    <button type="button" class="btn btn-lg btn-readm">
                        Read More +
                    </button>
                </div>
            </div>
        </div>
        <div class="blog-img blog-content">
            <img src="../Users/sirru/Local Sites/pretty-funxional-30/app/public/wp-content/themes/prettyfunx3/assets/blog-sample-pic.png"
                alt="blog sample pic" />
        </div>
    </div>

</main><!-- #main -->
<?php

get_footer();