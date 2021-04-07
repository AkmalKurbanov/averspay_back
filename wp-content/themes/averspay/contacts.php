<?php
/**
 * Template Name: Шаблон контактов
 * Template Post Type: post, page, product

 */

get_header();
?>

   <div class="wrapper contacts" id="swup" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg')">
    <div class="col">
      <div class="col__wrap">
        <?php get_template_part( 'template-parts/header' );?>
        <div class="col__content transition-fadeTop">
          <div class="contacts">
            <div class="contacts__item wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".3s">
              <div class="col__titlle-wrap transition-fadeTop">
                <h1 class="col__title col__title--thin">Связаться с нами:</h1>
              </div>
              <ul>
               <?php
                $phone = CFS()->get('phone_number_list');
                foreach($phone as $item) {
                  ?>
              <li>
                 <span>
                      <img src="<?php echo $item['operator_icon'] ?>" alt="">
                  </span>
                  <a href="tel:<?php echo $item['phone_number'] ?>"><?php echo $item['phone_number'] ?></a>
                  </li>
                  <?php
                }
        
                ?>
                
            
              </ul>
            </div>
            <div class="contacts__item wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s">
              <div class="col__titlle-wrap transition-fadeTop">
                <h1 class="col__title col__title--thin">Наш адрес:</h1>
                <ul>
                  <li>Кыргызстан, г. Бишкек, БЦ Монолит (офис 803-804)</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
          <div class="contacts__item contacts__item--social">
            <div class="col__titlle-wrap transition-fadeTop">
              <h1 class="col__title col__title--thin">Социальные сети:</h1>
            </div>
            <ul class="social transition-fadeTop">
                 <?php
                $sosial = CFS()->get('social_list');
                foreach($sosial as $item) {
                  ?>
              <li>
                <span>
                  <a href="<?php echo $item['social_link'] ?>">
                    <img src="<?php echo $item['social_icon'] ?>" alt="">
                  </a>
                  </span>
                  </li>
                  <?php
                }
        
                ?>
              
           
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="col__wrap">
        <div class="col__content">
          <div class="contacts_map transition-fadeTop">
            <div class="map_wrap">
            <?php echo CFS()->get( 'map' ); ?>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
