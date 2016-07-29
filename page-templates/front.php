<?php
/*
Template Name: Front
*/
get_header(); ?>

<div class="home-page">

    <header id="front-hero" role="banner">

    </header>
    <div class="marketing row">
        <div class="tagline">
            <h2><?php bloginfo( 'description' ); ?></h2>
            <p class=""></p>
        </div>
    </div>

    <div class="section-divider">
        <hr/>
    </div>

    <div class="sub-teasers row">
        <div class="teaser-contain">
            <a href="/menu">
                <div class="teaser">
                    <img  src="<?php echo get_template_directory_uri() ?>/assets/images/teaser.jpg">
                    <a class="teaser-link" href="/menu">Menu</a>
                </div>
            </a>
        </div>
        <div class="teaser-contain">
            <a href="/about-us">
                <div class="teaser">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/teaser2.jpg" />
                    <a class="teaser-link" href="/about-us">Learn More</a>
                </div>
            </a>
        </div>
    </div>
    <div class="best-sellers row">
        <h3 class="section-title">Our Top Sellers</h3>
        <?php
            $query_args = array(
                'post_type' => 'featured-products',
                'post_status' => 'publish',
                'posts_per_page' => 6,
            );
            $wp_query = new WP_Query($query_args);
            if($wp_query->have_posts()) {
                while($wp_query->have_posts()) {
                    $wp_query->the_post();
                    get_template_part( 'template-parts/featured_product' );
                }
            }
        ?>
    </div>

</div>

<?php get_footer();
