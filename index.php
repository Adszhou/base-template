
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> | <?php the_title() ?></title>
  <meta name="description" content="home">
  <meta name="keywords" content="index,home,首页">
  <meta name="og:title" content="<?php bloginfo('name'); ?>-<?php the_title() ?>">
  <meta name="og:description" content="home">
  <meta name="og:keywords" content="index,home,首页">
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
  <section class="lg:max-w-5xl  mx-auto text-center p-6 ">
    <div class="font-serif flex flex-col lg:space-y-10 space-y-4 text-[#1E224F]">
      <span class="lg:text-7xl text-4xl font-meshed ">
        Websites designed, built & managed for you
      </span>
      <span>Affordable, subscription based websites with free, unlimited support.</span>
      <div>
        <a class="btn w-[18vh]  bg-[#71EFA3] hover:bg-[#1E224F] hover:text-white" href="/home">Get Started</a>
      </div>
    </div>
  </section>
  <section>
    <img class="lg:p-20 p-6" src="<?php echo get_template_directory_uri() ?>/assets/images/section-1.svg" alt="Done for you small business websites">
  </section>
  <section class=" lg:max-w-5xl  mx-auto text-center p-6">
    <div class="font-serif flex flex-col lg:space-y-10 space-y-4 text-[#1E224F]">
      <span class="lg:text-6xl text-4xl font-meshed ">
        Done for you small business websites
      </span>
      <span>Layerly websites are 100% made and managed for you with personalized 1:1 support.</span>
      <?php get_template_part('template_parts/section/section-one') ?>
    </div>
    <div class="flex lg:flex-rol flex-row bg-[#1E224F] text-white lg:max-w-6xl mx-auto h-24 rounded-xl shadow-xl  justify-center items-center font-serif ">
      <div class="lg:text-4xl text-3xl">Get a website made for you</div>
      <div class="ml-2">
        <a class="btn w-[16vh]  bg-[#71EFA3] " href="/home">Get Started</a>
      </div>
    </div>
  </section>
  <section class="flex flex-col lg:flex-row text-xl">
    <img class="lg:w-2/3 p-4 md:2/3" src="<?php echo get_template_directory_uri() ?>/assets/images/section-2.svg" alt="Meticulously crafted to scale your business">
    <div class="font-serif flex flex-col justify-center p-4 space-y-4">
      <span class="lg:text-5xl text-4xl font-meshed">Meticulously crafted to scale your business</span>
      <span>
        One affordable plan that fits your needs and designed to grow your business.
      </span>
      <div>
        <lord-icon src="https://cdn.lordicon.com/hiqmdfkt.json" trigger="hover" colors="primary:#30e849,secondary:#30e8bd" style="width:40px;height:40px">
        </lord-icon>
        <span class="">An all-in-one website plan</span>
      </div>
      <div>
        <lord-icon src="https://cdn.lordicon.com/hiqmdfkt.json" trigger="hover" colors="primary:#30e849,secondary:#30e8bd" style="width:40px;height:40px">
        </lord-icon>
        <span> Affordable pricing</span>
      </div>
      <div>
        <lord-icon src="https://cdn.lordicon.com/hiqmdfkt.json" trigger="hover" colors="primary:#30e849,secondary:#30e8bd" style="width:40px;height:40px">
        </lord-icon>
        <span> 1:1 personalized support</span>
      </div>
    </div>
  </section>
  <section class="">
    <?php get_template_part('template_parts/post/post-pool-three') ?>
  </section>
  <section class="font-serif lg:max-w-5xl  mx-auto text-center p-4 space-y-4">
    <div class="lg:text-6xl text-4xl font-meshed">Experience how Layerly works for you</div>
    <div>Find out how more business owners are saving time and money with a 100% done for you website.</div>
    <div class="ml-2">
      <a class="btn w-[16vh]  bg-[#71EFA3] " href="/home">Get Started</a>
    </div>
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/section-4.svg" alt="Experience how Layerly works for you" />
  </section>
</main>

<?php get_footer(); ?>
</body>