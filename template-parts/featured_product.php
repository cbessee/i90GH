<?php
    $price = get_field('price');
?>

<div class="featured-product">
    <div class="product-info large-4 columns">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="description large-8 columns">
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
    </div>
</div>
