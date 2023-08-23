<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> | <?php the_title() ?></title>
  <meta name="description" content="single">
  <meta name="keywords" content="single,文章">
  <meta name="og:title" content="<?php bloginfo('name'); ?>-<?php the_title() ?>">
  <meta name="og:description" content="single">
  <meta name="og:keywords" content="single,文章">
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
<?php get_header(); ?>
<main>
  <div class="p-4 breadcrumbs lg:max-w-5xl mx-auto leading-4">
    <ul>
      <li><a href="/blog" class="text-xl hover:font-bold duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="-5 -5 24 24">
            <path fill="currentColor" d="m3.414 7.657l3.95 3.95A1 1 0 0 1 5.95 13.02L.293 7.364a.997.997 0 0 1 0-1.414L5.95.293a1 1 0 1 1 1.414 1.414l-3.95 3.95H13a1 1 0 0 1 0 2H3.414z" />
          </svg>
          Back to blog</a></li>
    </ul>
  </div>
  <div class="px-4">
    <?php get_template_part('template_parts/single/single-header1') ?>
  </div>
  <article class="prose lg:prose-xl mx-auto px-4 font-serif p-10">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div>
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </article>

  <div id="m-comment" class="lg:max-w-3xl lg:mx-auto px-4 lg:px-0 space-y-8">
    <div class="pt-4 border-t">
      <?php comments_template() ?>
    </div>
    <?php get_template_part('template_parts/base/base-comments') ?>
  </div>

</main>
<?php get_footer(); ?>