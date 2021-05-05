<?php
/**
 * Template Name: Шаблон с gif анимацией
 * Template Post Type: post, page, product

 */

get_header();
?>

<div class="wrapper" id="swup" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg')">
    <div class="col">
      <div class="thematic-image transition-fade">
        <div class="play_btn_wrap">
          <div class="play_btn"></div>
        </div>
        <div class="thematic-gif">
        <img src="<?php echo CFS()->get( 'thematic_gif' ); ?>" alt="">
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/border.png" alt="">
      </div>
      <div class="col__wrap">
       <?php get_template_part( 'template-parts/header' );?>
        <div class="col__content transition-fadeTop">
          <div class="col__titlle-wrap transition-fadeTop">
            <h1 class="col__title wow bounceInLeft" data-wow-duration=".7s" data-wow-delay=".5s"><?php echo CFS()->get( 'title' ); ?></h1>
            <h2 class="col__sub-title wow bounceInLeft" data-wow-duration=".7s" data-wow-delay=".6s"><?php echo CFS()->get( 'subtitle' ); ?></h2>
                      <?php

          
          $dwnldBtn = CFS()->get( 'dwnld_btn' );
          $typicalBtn =  CFS()->get( 'typical_btn' );
          $link = CFS()->get( 'link' );
          $dwnldLink = CFS()->get( 'dwnld_link' );
          $btnTxt = CFS()->get( 'btn_txt' );
    
          if ($dwnldBtn == true) {
            echo "<div class='btn btn--dwnld wow bounceInLeft' data-wow-duration='.7s' data-wow-delay='.7s'>
              <span class='btn__bubble'></span>
              <a class='btn__inner' href='$dwnldLink'>
              <span class='btn__text'>
              <svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 21.15 25'
                    width='23'>
                    <defs>
                      <style>
                        .cls-1 {
                          fill: none;
                        }

                        .cls-2 {
                          clip-path: url(#clip-path);
                        }

                        .cls-3 {
                          fill: #fff;
                        }
                      </style>
                      <clippath id='clip-path' transform='translate(-1.92 0)'>
                        <rect class='cls-1' width='25' height='25'></rect>
                      </clippath>
                    </defs>
                    <g id='Слой_2' data-name='Слой 2'>
                      <g id='Слой_1-2' data-name='Слой 1'>
                        <g class='cls-2'>
                          <path class='cls-3'
                            d='M3.47,8.1a1.5,1.5,0,0,0-1.1.45,1.47,1.47,0,0,0-.45,1.08v6.46a1.54,1.54,0,0,0,1.55,1.55A1.52,1.52,0,0,0,5,16.09V9.63a1.47,1.47,0,0,0-.45-1.08A1.47,1.47,0,0,0,3.47,8.1Z'
                            transform='translate(-1.92 0)'></path>
                          <path class='cls-3 androin-head'
                            d='M15.91,2.3,17,.33A.2.2,0,0,0,16.9,0a.21.21,0,0,0-.3.09l-1.08,2a7.55,7.55,0,0,0-6,0L8.4.12A.21.21,0,0,0,8.1,0,.2.2,0,0,0,8,.33l1.07,2A6.6,6.6,0,0,0,6.51,4.6a5.78,5.78,0,0,0-1,3.24h13.9a5.85,5.85,0,0,0-1-3.24A6.64,6.64,0,0,0,15.91,2.3ZM9.74,5.16a.58.58,0,0,1-.82,0,.56.56,0,0,1-.16-.41.6.6,0,0,1,.16-.42.58.58,0,0,1,.82,0,.58.58,0,0,1,.18.42A.54.54,0,0,1,9.74,5.16Zm6.34,0a.58.58,0,0,1-.82,0,.54.54,0,0,1-.18-.41.58.58,0,0,1,.18-.42.58.58,0,0,1,.82,0,.6.6,0,0,1,.16.42A.56.56,0,0,1,16.08,5.16Z'
                            transform='translate(-1.92 0)'></path>
                          <circle class='cls-3' cx='7.37' cy='4.88' r='0.2'></circle>
                          <circle class='cls-3' cx='13.54' cy='4.88' r='0.2'></circle>
                          <circle class='eye-blink' cx='7.7' cy='4.88' r='0.7'></circle>
                          <circle class='eye-blink' cx='13.13' cy='4.88' r='0.7'></circle>
                          <path class='cls-3'
                            d='M5.6,18.39a1.59,1.59,0,0,0,.48,1.17A1.63,1.63,0,0,0,7.26,20H8.37v3.41A1.54,1.54,0,0,0,9.92,25,1.48,1.48,0,0,0,11,24.55a1.5,1.5,0,0,0,.45-1.1V20h2.08v3.41a1.5,1.5,0,0,0,.45,1.1,1.48,1.48,0,0,0,1.09.45,1.54,1.54,0,0,0,1.55-1.55V20h1.13a1.66,1.66,0,0,0,1.64-1.65v-10H5.6Z'
                            transform='translate(-1.92 0)'></path>
                          <path class='cls-3'
                            d='M21.53,8.1a1.5,1.5,0,0,0-1.08.44A1.48,1.48,0,0,0,20,9.63v6.46a1.5,1.5,0,0,0,.45,1.1,1.47,1.47,0,0,0,1.08.45,1.54,1.54,0,0,0,1.55-1.55V9.63a1.48,1.48,0,0,0-.45-1.09A1.53,1.53,0,0,0,21.53,8.1Z'
                            transform='translate(-1.92 0)'></path>
                        </g>
                      </g>
                    </g>
                  </svg>
                  <div class='btn__download'> <span>Скачать</span>в Google Play</div>
                </span>
                </a>
              </div>";
          } else {
             
          }

          if ($typicalBtn == true) {
              echo "<div class='btn wow bounceInLeft' data-wow-duration='.7s' data-wow-delay='.7s'>
              <span class='btn__bubble'></span>
                <a class='btn__inner' href='$link'>
                <span class='btn__text'>$btnTxt</span>
                </a>
                </div>";
          } else {
          
          }

                
          ?>
          </div>
          <div class="thematic-image thematic_mobile transition-fade">
            <div class="play_btn_wrap">
              <div class="play_btn"></div>
            </div>
            <div class="thematic-gif">
              <img src="<?php echo CFS()->get( 'thematic_gif' ); ?>" alt="">
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/border.png" alt="">
          </div>
        </div>
        <div class="bottom wow fadeInUp transition-fadeTop">
          <div class="pagination"></div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="col__content">
        <div class="list transition-fadeTop">
        <?php
        $listItem = CFS()->get('list_item');
        foreach($listItem as $item) {
          ?>
         <div class="list__item item wow slideInRight" data-wow-duration="1s" data-wow-delay=".<?php echo $item['delay'] ?>s">
            <div class="item__icon">
            <img src="<?php echo $item['img_icon'] ?>" alt="">
            </div>
            <div class="item__desc">
              <h3 class="item__title"><?php echo $item['list_item_title'] ?></h3>
              <p><?php echo $item['list_item_desc'] ?></p>
            </div>
          </div>
          <?php
        }
 
        ?>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
