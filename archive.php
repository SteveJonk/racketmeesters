<?php get_header(); ?>

<?php
$page_for_posts = get_option('page_for_posts');
$content_post = get_post($page_for_posts);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
echo $content;
?>

<div class="container">

    <?php get_template_part('template-parts/tag-list'); ?>

    <div class="post-list">
        <?php while (have_posts()) {
            the_post();
            get_template_part('template-parts/post-card');
        } ?>
    </div>
    <?php the_posts_pagination(); ?>
</div>

<?php get_footer() ?>