<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="../dist/output.css">
    <?php wp_head() ?>
</head>
<body> 

<?php if(is_front_page('home')){ ?>
     <div class="banner h-[70vh] lg:h-full relative" style="background-image:url('<?php the_field('banner_background') ?>'); background-repeat: no-repeat; background-size:cover">
      <?php } else { ?>
        <div class="banner h-[70vh] lg:h-screen relative" style="background-color:#433D3C;background-size:cover;">
  <?php } ?>
      <header class="header">
        <div class="container ">
          <div class="header__wrapper  justify-between items-center flex gap-5 lg:flex lg:flex-row lg:justify-between lg:justify-center lg:items-center py-4 lg:py-10">
            <div class="header__logo">
            <a href="./home.html" target="_blank"><?php the_custom_logo() ?></a>
            </div>
          <ul class="header__nav font-semibold flex flex-col justify-center items-center bg-black/20 lg:bg-transparent p-0 lg:flex lg:flex-row gap-10 items-center text-[15px] lg:text-[15px] lg:flex lg:flex-row lg:gap-10  lg:items-center
            fixed duration-700 top-0 right-[-100%]  h-full lg:static lg:w-auto w-full">
            <?php wp_menu_li() ?>
            <a href="" class="btn bg-yelloww text-[10px] lg:text-[15px]"> ORDER ONLINE</a>
          </ul>
          <div class="toggle__menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
          
          <div class="transparent">
          </div>
        </div>
        </div>
      </header>
    <!-- HEADER -->
    <!-- <header class="header  bg-homeImage h-full object-cover " style="background-image:url('<?php the_field('banner_background') ?>'); background-repeat: no-repeat; background-size:cover">
      <div class="container ">
        <div class="header__wrapper  justify-between items-center flex gap-5 lg:flex lg:flex-row lg:justify-between lg:justify-center lg:items-center py-5 lg:py-10">
          <div class="header__logo">
            <a href="./index.html" target="_blank"><?php the_custom_logo() ?></a>
          </div>
          <ul class="header__nav font-semibold flex flex-col justify-center items-center bg-black/20 lg:bg-transparent p-0 lg:flex lg:flex-row gap-10 items-center text-[15px] lg:text-[15px] lg:flex lg:flex-row lg:gap-10  lg:items-center
          fixed duration-700 top-0 right-[-100%]  h-full lg:static lg:w-auto w-full">
            <?php wp_menu_li() ?>
            <a href="" class="btn bg-yelloww text-[10px] lg:text-[15px]"> ORDER ONLINE</a>
          </ul>
          <div class="toggle__menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="transparent">

          </div>
        </div>
        <div class="homeBanner__wrapper flex flex-col justify-center text-center items-center">
                <div class="homeBanner__title font-bold">
                    <h1><?php the_field('banner_title') ?></h1>
                </div>
                <div class="homeBanner__time font-bold">
                    <p><?php the_field('banner_text') ?></p>
                </div>
                <img src="<?php the_field('hero_img') ?>" alt="">
         </div>
      </div>
    </header> -->