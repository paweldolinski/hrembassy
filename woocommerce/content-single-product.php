<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

global $product;
?>
<div id="product-<?php the_ID(); ?>" class="product">
    <div class="product__wrapper">
        <div class="product__prequestion" data-scroll="fadeUp"><?php the_field('pytanie_naglowek'); ?></div>
        <div class="product__question" data-scroll="fadeDown"><?php the_field('pytanie_pytanie'); ?></div>
        <div class="product__title" data-scroll="fadeUp"><?php the_title(); ?></div>
        <div class="product__fields" data-scroll="fadeIn">
            <div class="product__field">
                <div><?php get_template_part('img/svg/date.svg'); ?></div>
                <div><?php the_field('data'); ?></div>
            </div>
            <div class="product__field">
                <div><?php get_template_part('img/svg/place.svg'); ?></div>
                <div><?php the_field('miejsce'); ?></div>
            </div>
            <div class="product__field">
                <div><?php get_template_part('img/svg/head.svg'); ?></div>
                <div><?php echo $product->stock . ' / '; ?><?php the_field('meta_stock'); ?></div>
            </div>
        </div>
        <?php
            /**
             * Hook: woocommerce_single_product_summary.
             *
             * @removed woocommerce_template_single_title - 5
             * @hooked woocommerce_template_single_rating - 10
             * @removed woocommerce_template_single_price - 10
             * @hooked woocommerce_template_single_excerpt - 20
             * @hooked woocommerce_template_single_add_to_cart - 30
             * @removed woocommerce_template_single_meta - 40
             * @hooked woocommerce_template_single_sharing - 50
             * @hooked WC_Structured_Data::generate_product_data() - 60
             */
            do_action( 'woocommerce_single_product_summary' );
        ?>
    </div>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>