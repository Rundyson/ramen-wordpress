<?php

/***
 * Template Name: Full Menu
 */

?>
            <?php get_header() ?>
</div>
        <!-- ANNOUNCEMENT -->
    <section class="announcement bg-secondary py-1">
      <div class="container">
        <div
          class="announcement__wrapper font-bold text-center items-center justify-center"
        >
          <p class="lg:text-[16px] text-[10px]">
            MICHI RAMEN •
            <small class="text-[10px] lg:text-[16px] font-semibold"
              >TUESDAY - SUNDAY 11AM-MIDNIGHT • HAPPY HOUR 9PM-11PM</small
            >
          </p>
        </div>
      </div>
    </section>

    <!-- HOW TO ORDER -->
    <section class="howTooOrder py-10 bg-light">
      <div class="container">
        <div class="howToOrder__wrapper  items-center flex flex-col gap-5 lg:flex lg:flex-col">
          <div class="howToOrder__title font-semibold text-secondary">
            <h2 class="text-[25px] lg:text-[33px]"><?php the_field('how_order') ?></h2>
          </div>
          <ul class="howToOrder__menu font-economica font-bold text-dark justify-center text-center items-center flex flex-row lg:gap-10 lg:flex lg:flex-row">
            <li class="menus">
              <div class="menus__image">
                <img src="<?php the_field('first_process_img') ?>" alt="" />
              </div>
              <h3><?php the_field('first_process') ?></h3>
            </li>
            <li class="text-secondary text-[30px]">
              <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li class="menus">
              <div class="menus__image">
                <img src="<?php the_field('second_process_img') ?>" alt="" />
              </div>
              <h3><?php the_field('second_process') ?></h3>
            </li>
            <li class="text-secondary text-[30px]">
              <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li class="menus">
              <div class="menus__image">
                <img src="<?php the_field('third_process_img') ?>" alt="" />
              </div>
              <h3><?php the_field('third_process') ?></h3>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- RAMEN MENU -->
    <section class="ramenMenu py-10 bg-ramenImage" style="background-image:url('<?php the_field('ramen_background_img') ?>');">
      <div class="container">
        <div class="ramenMenu__wrapper items-center flex flex-col gap-10 lg:flex lg:flex-col">
          <div class="ramenMenu__title text-black font-bold">
            <h2 class="text-white"><?php the_field('ramen_background_title') ?></h2>
          </div>
          <div class="allMenu__list flex flex-col  w-full gap-10  lg:gap-10">
            <div class="ramenMenu__list grid grid-cols-2 gap-5 lg:grid lg:grid-cols-2 lg:gap-10">
                

            <?php 

            $args = array(
                'post_type' => 'ramen',
                'posts_per_page' => -1,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => 'ramens',
                  )
                )
            );
            $newQuery = new WP_Query($args);

            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

                <div class="cardHolder border p-2 lg:p-0 border-black lg:border-none text-center lg:text-start">
                    <div class="ramenMenu__list--cards items-center flex flex-col-reverse lg:grid lg:grid-cols-2">
                        <div class="ramenMenu__details">
                            <div class="ramenPrices flex justify-between items-center lg:items-start lg:flex lg:flex-col">
                            <h3><?php the_title() ?></h3>
                            <small><?php the_field('ramen_price') ?></small>
                            </div>
                            <ul>
                            <?php the_field('ramen_ingredients') ?>
                            </ul>
                        </div>
                        <div class="ramenMenu__image">
                            <?php 
                            if(has_post_thumbnail()) :
                            the_post_thumbnail();
                            endif;
                            ?>
                    </div>
                    </div>
                    <h4><?php the_excerpt() ?></h4>
                </div>

            <?php 
              endwhile;
            else :
              echo "No Available Content Yet";
            endif;
            wp_reset_postdata();
            
            ?>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- INGREDIENT -->
    <section class="ingredient__bg">
      <img class="w-full" src="<?php the_field('ingredients_img') ?>" alt="" />
    </section>

    <!-- RAMEN TOPPINGS -->
    <section class="ramenToppings py-10 bg-light text-black">
      <div class="container">
        <div class="ramenToppings__wrapper flex flex-col gap-5 items-center">
          <div class="ramenToppings__details grid place-items-center">
            <h2 class="font-bold text-secondary text-[40px]">RAMEN TOPPINGS</h2>
            <div class="broth__price flex flex-row gap-4">
              <h4 class="font-semibold text-primary">BROTH & NOODLES</h4>
              <h4 class="font-semibold text-dark">$6.50</h4>
            </div>
            <small class="text-dark font-semibold">Great for kids or to build your own</small>
          </div>
          <div class="wrapper flex flex-col gap-5 border border-black p-2 w-full lg:border-none lg:p-0 lg:grid lg:grid-cols-2 lg:gap-10 lg:w-[800px] lg:mx-auto font-montserrat">



            <?php 

            $args = array(
                'post_type' => 'ramen',
                'posts_per_page' => -1,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => 'ramentoppings ',
                  )
                )
            );
            $newQuery = new WP_Query($args);

            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

            <div class="toppingsItem text-dark border border-black p-2 lg:p-0 lg:border-none">
              <div class="flex justify-between">
                <div class="toppingsName">
                  <h4 class="font-bold"><?php the_title() ?></h4>
                  <div class="font-semibold text-[12px]">
                    <?php the_excerpt() ?>
                  </div>
                </div>
                <div class="thePrice font-bold">
                  <h4><?php the_field('ramen_price') ?></h4>
                </div>
              </div>
            </div>


            <?php 
              endwhile;
            else :
              echo "No Available Content Yet";
            endif;
            wp_reset_postdata();
            
            ?>

          </div>
        </div>
      </div>
    </section>

    <!-- MOCHIS -->
    <section class="mochiBg">
      <img class="w-full" src="<?php the_field('mochi_img') ?>" alt="" />
    </section>

    <!-- SIDES & DESSERT -->
    <section class="sidesDessert py-10 bg-light text-black">
      <div class="container">
        <div class="sidesDessert__wrapper flex flex-col gap-5 items-center">
          <div class="sidesDessert__details grid place-items-center">
            <h2 class="font-bold text-secondary text-[40px]">
              SIDES & DESSERTS
            </h2>
          </div>
          <div class="wrapper flex flex-col lg:grid lg:grid-cols-2 gap-10 border border-black p-2 lg:p-0 lg:border-none lg:w-[800px] lg:mx-auto font-montserrat">
           
            <?php 

              $args = array(
                  'post_type' => 'ramen',
                  'posts_per_page' => -1,
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'category',
                      'field' => 'slug',
                      'terms' => 'sides',
                    )
                  )
              );
              $newQuery = new WP_Query($args);

              ?>

              <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

          <div class="sidesDessertItem text-dark border border-black p-2 lg:p-0 lg:border-none">
              <div class="flex justify-between">
                <div class="sidesDessertName">
                  <h4 class="font-bold"><?php the_title() ?></h4>
                  <p class="font-semibold text-[12px]">
                    <?php the_excerpt() ?>
                  </p>
                </div>
                <div class="thePrice font-bold">
                  <h4><?php the_field('ramen_price') ?></h4>
                </div>
              </div>
            </div>

            <?php 
                endwhile;
              else :
                echo "No Available Content Yet";
              endif;
              wp_reset_postdata();
              
              ?>
          </div>

              


        </div>
      </div>
    </section>

    <!-- BEER -->
    <section class="beerBg">
      <img class="w-full" src="<?php the_field('beer_img') ?>" alt="" />
    </section>

    <section class="drinks pb-20 text-black bg-light">
          <img src="./img/drinks.png" class="w-full" alt="" />
          <div class="container">
            <div class="mt-20 grid place-items-center">
              <h2 class="text-center font-bold text-[60px] text-secondary uppercase">
                drinks
              </h2>
              <h2
                class="text-center font-bold text-[40px] text-customGray uppercase mb-4"
              >
                join us for happy hour
              </h2>
              <p class="uppercase font-bold text-center text-[18px] mb-16">
                3-6pm / 9-11pm • $1 off all beer | wednesday 5-11pm • $2 sake
                caraffes
              </p>
            </div>
            <div class="grid place-items-center mb-16">
              <ul
                class="drinksType uppercase flex items-center gap-5 lg:gap-20 [&>li]:text-[55px] font-bold font-economica [&>li]:cursor-pointer py-8"
              >

                    <?php 

                  $args = array(
                      'post_type' => 'drink',
                      'posts_per_page' => -1,

        
                  );
                  $newQuery = new WP_Query($args);

                  ?>

                  <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>


                <li id="drinkTypeItem-<?php the_field('drink_id') ?>" class="drinkNav"><?php the_title() ?></li>

                  <?php 
                    endwhile;
                  else :
                    echo "No Available Content Yet";
                  endif;
                  wp_reset_postdata();
                  
                  ?>
        
              </ul>
            </div>

            <div class="wrapper  lg:w-[1000px] lg:mx-auto">


            <?php 

                  $args = array(
                      'post_type' => 'drink',
                      'posts_per_page' => -1,

        
                  );
                  $newQuery = new WP_Query($args);

                  ?>

                  <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>



              <div id="drinkTypeItem-<?php the_field('drink_id') ?>-content" class="drinkGroup  hidden">
                    <?php if(have_rows('drink_type')): ?>
                    <?php while(have_rows('drink_type')) : the_row()?>
              
                <div>
                  <p class="uppercase text-center text-xl font-bold mb-4 "><?php the_sub_field('group_name') ?></p>
                    
                  <?php if(have_rows('drink_group')): ?>
                    <?php while(have_rows('drink_group')) : the_row()?>
                  
                  <div class="toppingsItem text-customGray ">
                      <div class="flex justify-between">
                        <div class="toppingsName">
                          <p class="uppercase text-2xl font-bold"><?php the_sub_field('name') ?></p>
                          <p class="text-sm font-semibold">
                            <?php the_sub_field('description') ?>
                          </p>
                          </div>
                        <div class="thePrices">
                          <p class="text-2xl font-bold"><?php the_sub_field('price') ?></p>
                        </div>
                      </div>
                    </div>
                  
                  <?php endwhile; ?>
                  <?php endif ?>
                </div>

              <?php endwhile; ?>
              <?php endif ?>
              
            </div>

                    <?php 
                    endwhile;
                  else :
                    echo "No Available Content Yet";
                  endif;
                  wp_reset_postdata();
                  
                  ?>

            </div>
          </div>
    </section>

      <script>

      const drinkNav = document.querySelectorAll(".drinkNav").item(0);
      drinkNav.classList.add('active');

      const drinkGroupContent = document.querySelectorAll(".drinkGroup").item(0);
      drinkGroupContent.classList.add('active');
        
        const itemNav = document.querySelectorAll(".drinksType li");
        const drinkGroup = document.querySelectorAll(".drinkGroup");
        itemNav.forEach((menuList) => {
        menuList.addEventListener("click", () => {
          removeActiveMenu();
          menuList.classList.add("active");
          const drinkGroupContent = document.querySelector(
            `#${menuList.id}-content`
          );
          removeContentActive();
          drinkGroupContent.classList.add("active");
        });
      });


      function removeActiveMenu() {
        itemNav.forEach((menu) => {
          menu.classList.remove("active");
        });
      }


      function removeContentActive() {
        drinkGroup.forEach((content) => {
          content.classList.remove("active");
        });
      }
    </script>


<?php get_footer() ?>