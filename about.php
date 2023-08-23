<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> | <?php the_title() ?></title>
  <meta name="description" content="about">
  <meta name="keywords" content="about,关于我们">
  <meta name="og:title" content="<?php bloginfo('name'); ?>-<?php the_title() ?>">
  <meta name="og:description" content="about">
  <meta name="og:keywords" content="about,关于我们">
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
 * Template Name: About
 */

get_header(); ?>

<main class="lg:max-w-6xl lg:mx-auto font-serif flex flex-col lg:flex-row">
    <img class="lg:w-1/2" src="<?php echo get_template_directory_uri() ?>/assets/images/section-3.svg" alt="about">
    <div class="lg:p-10 p-6 space-y-6 text-xl text-justify">
        <div class="lg:text-7xl text-4xl font-meshed  text-center">
            About Us
        </div>
        <div>Web design is the process of planning, conceptualizing, and arranging content online. Today, designing a website goes beyond aesthetics to include the overall functionality of the website. Web design also includes web applications, mobile applications, and user interface design.
        </div>
        <div>
            Did you know that web design can have a huge impact on your performance in search engines like Google? This article will give you some useful insights on how to create a website that not only looks good, but also functions properly and ranks high in searches.</div>
        <div>
            When designing a website, it is important to consider the appearance and functionality of the website. Integrating these elements will maximize the overall usability and performance of your website. The usability of your website includes elements such as an easy-to-navigate interface, appropriate use of graphics and images, well-written and well-placed text, and color schemes. The performance of your website refers to its speed, ranking, searchability, and ability to attract an audience.
        </div>
       
    </div>

</main>

<?php get_footer(); ?>
</body>