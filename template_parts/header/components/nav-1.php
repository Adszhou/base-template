<?php

/**
 * @description 头部导航组件
 * 
 * @see https://github.com/Rich4st/base/blob/develop/preview/nav-base.jpg?raw=true
 * 
 * @param string $extra-class 额外的类名
 * 
 */

$class = 'header-nav hidden lg:flex items-center space-x-4 mr-8 text-lg hover:text-gray-600 ' . ($args['extra-class'] ?? '')
?>

<div class="flex flex-row ">
  <?php wp_nav_menu(array(
    'container' => 'ul',
    'menu_class' => $class,
  )); ?>
  <div class="navbar-end  flex-row hidden lg:flex ">
    <button class="btn bg-[#E1E2F2] hover:bg-[#1E224F] hover:text-white w-[15vh] " onclick="my_modal.showModal()">Login out</button>
    <dialog id="my_modal" class="modal">
      <form method="dialog" class="modal-box">
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2 ">✕</button>
        <h3 class="font-bold text-lg">Hello!</h3>
        <p class="py-4">Welcome to a different world, which will bring you a different experience</p>
      </form>
    </dialog>
    <div>
      <a class="btn w-[15vh] bg-[#71EFA3] hover:bg-[#1E224F] hover:text-white ml-5" href="/home">Get Started</a>
    </div>
  </div>

</div>