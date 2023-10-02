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
                <a class="woocommerce-shop" href="<?php echo get_permalink(wc_get_page_id('shop')) ?>"
                    title="<?php esc_attr_e('View the shop', 'prettyfunx3'); ?>">
                    <button type="button" class="btn btn-templates btn-lg">
                        Templates
                    </button>


                </a>
                <a class="blogs-page" href="<?php echo get_permalink('blogs') ?>"
                    title="<?php esc_attr_e('View Blogs', 'prettyfunx3'); ?>">
                    <button type="button" class="btn btn-blog btn-lg">Blog</button>
                </a>
            </div>
        </div>
    </div>
    <div class="prod-con page-o">

        <div class="prod-content">
            <div class="prod-pic">
                <?php echo do_shortcode('[featured_products products columns=1 limit=0]'); ?>

            </div>
            <div class="prod-info">
                <div class="bs-title">
                    <h3>Our best seller</h3>
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


                    <img src="https://media.flaticon.com/dist/min/img/filters/color.svg" />
                    <p>More colors available</p>
                </div>
                <div class="temp-buttons">
                    <a class="woocommerce-shop" href="<?php echo get_permalink(wc_get_page_id('shop')) ?>"
                        title="<?php esc_attr_e('View the shop', 'prettyfunx3'); ?>">
                        <button class="arrow-button">
                            Go to Shop

                        </button>


                    </a>
                </div>
            </div>



        </div>
    </div>

    <article id="post-<?php the_ID(); ?>" <?php post_class("homepage-latest-article"); ?>>
        <div class="blog-con page-o">
            <div class="blog-text-con blog-content">
                <div class="lbp-con">
                    <h4>Latests Blog Post</h4>
                </div>
                <div class="blog-display-con">
                    <div class=" col blog-text">
                        <div class="latest-blog-right-side">


                            <header class="entry-header blog-title">
                                <?php the_title(sprintf('<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>'); ?>
                            </header><!-- .            entry-header -->


                            <div class="entry-content blog-excerpt">
                                <?php the_excerpt(); ?>
                            </div><!-- .entry-content -->



                            <?php if (get_edit_post_link()): ?>
                                <footer class="entry-footer continue-reading ">
                                    <?php echo '<div class="wp-block-read-more read-more-con"><button type="button" class="btn btn-lg btn-readm"><a href="' . get_permalink() . '" title="' . __('Read More ', 'prettyfunx3') . get_the_title() . '" rel="bookmark">Read More</a></button></div>'; ?>
                                </footer><!-- .entry-footer -->

                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="featured-img-box blog-img blog-content"">
                        <?php prettyfunx3_post_thumbnail(); ?>
                                    
                                                        
                                                    
                                                    
            </article><!-- #post-<?php the_ID(); ?> -->
                        


</main><!-- #main -->
<?php

get_footer();