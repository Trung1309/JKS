<?php get_header();?>
<h1>Mục tiêu của chúng tôi</h1>


<?php $args = array( 'post_type' => 'product', 'posts_per_page' => 10, 'post_status' => 'publish'); ?>
<?php $getposts = new WP_query( $args);?>
<?php global $wp_query; $wp_query->in_the_loop = true; ?>
<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
<?php global $product; ?>

<?php endwhile; wp_reset_postdata(); ?>