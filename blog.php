<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> | <?php the_title() ?></title>
  <meta name="description" content="blog">
  <meta name="keywords" content="blog ,博客">
  <meta name="og:title" content="<?php bloginfo('name'); ?>-<?php the_title() ?>">
  <meta name="og:description" content="blog">
  <meta name="og:keywords" content="blog ,博客">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php bloginfo('url') ?>">
  <meta property="og:site_name" content="<?php bloginfo('name') ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/tailwind.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>
  <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
  <?php wp_head(); ?>
</head>

<body>
<?php

/**
 * Template Name: Blog
 */

get_header(); ?>

<main class="lg:max-w-5xl lg:mx-auto">

    <section class="flex  lg:flex-row flex-col">
        <?php get_template_part('template_parts/post/post-category-list') ?>
        <div class="py-10">
            <?php get_template_part('template_parts/base/base-sidebar') ?>
        </div>

    </section>
    <?php

    /**
     * @description Blog列表页面
     * 
     * @see https://github.com/Rich4st/base/blob/develop/preview/blog-1.jpg?raw=true
     * 
     */
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => $args['page-size'] ?? 4,
        'orderby' => $args['orderby'] ?? 'date',
        'order' => $args['order'] ?? 'DESC',
        'paged' => $paged,
    );
    $all_posts = new WP_Query($args);
    ?>

    <ul class="pagination flex items-center space-x-4 p-6">
        <li>
            <?php
            // 分页链接
            echo paginate_links(array(
                'total' => $all_posts->max_num_pages,
                'current' => $paged,
            ));
            ?>
        </li>

        <li>total <?php echo $all_posts->max_num_pages ?> Page(s)</li>

        <li><?php echo $all_posts->found_posts ?> post(s)</span>
    </ul>

</main>

<?php get_footer(); ?>
</body>