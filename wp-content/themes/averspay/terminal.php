<?php
/**
 * Template Name: Шаблон терминалов
 * Template Post Type: post, page, product
 */

get_header();
?>


<div class="wrapper" id="swup" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg')">
    <div class="col">
      <div class="thematic-image terminalFade">
       <img src="<?php echo CFS()->get( 'thematic_img' ); ?>" alt="">
      </div>
      <div class="col__wrap">
        <?php get_template_part( 'template-parts/header' );?>
        <div class="col__content transition-fadeTop">
          <div class="col__titlle-wrap transition-fadeTop">
            <h1 class="col__title wow bounceInLeft" data-wow-duration=".7s" data-wow-delay=".5s"><?php echo CFS()->get( 'title' ); ?></h1>
            <h2 class="col__sub-title wow bounceInLeft" data-wow-duration=".7s" data-wow-delay=".6s"><?php echo CFS()->get( 'subtitle' ); ?></h2>
            <div class="btn wow bounceInLeft" data-wow-duration=".7s" data-wow-delay=".7s">
            <span class="btn__bubble"></span>
            <a class="btn__inner" href="<?php echo CFS()->get( 'link' ); ?>">
            <span class="btn__text">Подать заявку на подключение</span>
            </a>
            </div>
          </div>
          <div class="thematic-image thematic_mobile terminalFade transition-fade">
           <img src="<?php echo CFS()->get( 'thematic_img' ); ?>" alt="">
          </div>
        </div>
        <div class="bottom wow fadeInUp transition-fadeTop">
          <div class="pagination"></div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="col__wrap">
        <div class="col__content">
          <div class="terminal_map transition-fadeTop">
            <div class="map_wrap">
                 <?php echo CFS()->get( 'terminal_map' ); ?>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>


   

<?php
get_footer();
