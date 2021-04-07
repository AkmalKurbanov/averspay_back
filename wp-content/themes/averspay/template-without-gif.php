<?php
/**
 * Template Name: Шаблон без gif анимации
 * Template Post Type: post, page, product

 */

get_header();
?>

<div class="wrapper processing" id="swup" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg')">
    <div class="col">
      <div class="thematic-image transition-fade">
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
          <div class="thematic-image thematic_mobile transition-fade">
            <img src="<?php echo CFS()->get( 'thematic_img' ); ?>" alt="">
          </div>
        </div>
        <div class="bottom">
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
