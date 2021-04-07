<?php
/**
 * Template Name: Шаблон о компании
 * Template Post Type: post, page, product

 */
get_header();
?>

  <div class="wrapper wide about" id="swup" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg')">
    <div class="col">
      <div class="col__wrap">
        <?php get_template_part( 'template-parts/header' );?>
        <div class="col__content">
          <div class="col__titlle-wrap transition-fadeTop">
            <h1 class="col__title col__title--secondary wow bounceInLeft" data-wow-duration=".7s" data-wow-delay=".5s"><?php echo CFS()->get( 'title' ); ?></h1>
            <h2 class="col__sub-title col__sub-title--secondary wow bounceInLeft" data-wow-duration=".7s" data-wow-delay=".6s"><?php echo CFS()->get( 'subtitle' ); ?></h2>
          </div>
          <div class="about-desc">
          <?php
                $additionalInfo = CFS()->get('additional_info_list');
                foreach($additionalInfo as $item) {
                  ?>
                <div class="col__titlle-wrap transition-fadeTop">
              <h1 class="col__title col__title--secondary wow bounceInLeft" data-wow-duration=".7s"
                data-wow-delay=".5s"><?php echo $item['title'] ?></h1>
              <h2 class="col__sub-title col__sub-title--secondary wow bounceInLeft" data-wow-duration=".7s"
                data-wow-delay=".6s"><?php echo $item['subtitle'] ?></h2>
            </div>
                  <?php
                }
        
                ?>
            
            
          </div>
        </div>
       <div class="bottom wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
          <div class="partners transition-fadeTop">
            <div class="partners__slider partners-js">

                <?php
                $partners = CFS()->get('partners');
                foreach($partners as $item) {
                  ?>
                <div class="partners__item">
                        <a href="<?php echo $item['partner_link'] ?>">
                          <img src="<?php echo $item['partner_logo'] ?>" alt="">
                        </a>
                      </div>
                  <?php
                }
        
                ?>
              
         
            </div>
          </div>
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
