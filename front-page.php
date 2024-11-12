
            <?php get_header() ?>
            
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
     </div>

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
            <h2><?php the_field('ramen_background_title') ?></h2>
          </div>
          <div class="allMenu__list flex flex-col  w-full gap-10  lg:gap-10">
            <div class="ramenMenu__list grid grid-cols-2 gap-5 lg:grid lg:grid-cols-2 lg:gap-10">
                

            <?php 

            $args = array(
                'post_type' => 'ramen',
                'post_per_page' => -1,
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
          <a href="http://localhost/Ramen/full-menu/" target="_blank" class="btn bg-darkk"><button><?php the_field('ramen_menu_btn_txt') ?></button></a>
        </div>
      </div>
    </section>

      <!-- CTA -->
    <section class="cta bg-light">
        <div class="container">
            <div class="cta__wrapper font-bold flex flex-col text-center py-10">
                    <h2 class="text-secondary"><?php the_field('cta_title') ?></h2>
                    <p class="text-primary"><?php the_field('cta_date') ?></p>
            </div>
        </div>
        <div class="cta__image flex flex-col lg:flex lg:flex-row">
            <img src="<?php the_field('cta_img_1') ?>" alt="">
            <img src="<?php the_field('cta_img_2') ?>" alt="">
            <img src="<?php the_field('cta_img_3') ?>" alt="">
        </div>
    </section>

<?php get_footer() ?> 