<?php
// Product meta
$_product = wc_get_product(get_the_ID());
$regular_price = $_product->get_regular_price();
$sale_price = $_product->get_sale_price();
$price = $_product->get_price();
// Author meta
$author_id = get_post_field('post_author', get_the_ID());
$author_name = get_the_author_meta('first_name', $author_id);
$last_name = get_the_author_meta('last_name', $author_id);
if ($last_name) {
    $author_name .= ' ' . $last_name;
}
$image = get_the_post_thumbnail_url(get_the_ID(), 'large');
if (!$image) {
    $image = get_stylesheet_directory_uri() . '/assets/img/default-product.png';
}
// Custom fields info
$lesons_duration = get_field('lesons_duration');
$level = get_field('level');
$lesons_count = get_field('lesons_count');
$popular = get_field('popular');
$best_seller = get_field('best_seller');
?>
<div class="product-card">
    <a href="<?php the_permalink(); ?>" class="image-container">
        <div class="hover-mask"></div>
        <img src="<?= $image ?>" alt="">
    </a>
    <div class="product-info">
        <div class="stars"></div>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <div class="status">
            <?php if ($lesons_count) : ?>
                <div class="lessons">
                    <?= $lesons_count ?> <?php _e('lessons', 'educrat'); ?>
                </div>
            <?php endif;
            if ($lesons_duration) : ?>
                <div class="time">
                    <?= $lesons_duration ?>
                </div>
            <?php endif;
            if ($level) : ?>
                <div class="level">
                    <?= $level ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="info">
            <?php if ($author_name) : ?>
                <div class="author"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/default_user.png'; ?>" alt=""><?= $author_name ?></div>
            <?php endif; ?>
            <div class="price">
                <?php if ($sale_price == '') { ?>
                    $<?= $price ?>
                <?php } else { ?>
                    <span>$<?= $regular_price ?></span> $<?= $sale_price ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>