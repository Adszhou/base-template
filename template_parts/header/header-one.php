<?php

/**
 * @description headder4
 * 
 * @see drawer: https://github.com/Rich4st/base/blob/develop/preview/header-4.jpg?raw=true
 * 
 */
?>
<header class="font-pop">
    <div class="navbar lg:max-w-7xl lg:mx-auto">
        <div class="navbar-start">
            <a class="bg-[#71EFA3] p-2 rounded-full" href="<?php echo home_url() ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="m21.29 4.1l-4.12-2a1.36 1.36 0 0 0-.48-.1h-.08a1.18 1.18 0 0 0-.72.24l-.14.12l-7.88 7.19L4.44 7a.83.83 0 0 0-.54-.17a.88.88 0 0 0-.53.17l-1.1 1a.8.8 0 0 0-.27.61a.84.84 0 0 0 .27.62l3 2.71l-3 2.72a.84.84 0 0 0 0 1.23l1.1 1a.89.89 0 0 0 .6.22a.93.93 0 0 0 .47-.17l3.43-2.61l7.88 7.19a1.2 1.2 0 0 0 .76.36h.17a1 1 0 0 0 .49-.12l4.12-2a1.25 1.25 0 0 0 .71-1.1V5.23a1.26 1.26 0 0 0-.71-1.13zM17 16.47l-6-4.53l6-4.53z" />
                </svg>
            </a>
            <a class="btn btn-ghost normal-case lg:text-4xl text-2xl font-meshed text-[#1E224F] " href="<?php echo home_url() ?>">Capalot</a>
        </div>
        <div class="navbar-center">
            <?php echo get_template_part('template_parts/header/components/nav-1', '', array(
                'extra-class' => 'header4-nav hidden lg:flex items-center no-underline space-x-6'
            )); ?>
            <?php get_template_part('template_parts/header/components/drawer', '', array(
                'menu-icon-class' => 'text-[#fff8ee]'
            )); ?>
            <div class="lg:hidden flex pl-28 md:pl-32">
                <?php get_template_part('template_parts/header/components/action'); ?>
            </div>
        </div>

    </div>

</header>