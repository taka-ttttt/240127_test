<?php
/*
Template Name: 固定ページデフォルトテーマ
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="<?php echo get_post($wp_query->post->ID)->post_name; ?>">
    <div class="l-page l-inner">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</div>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>