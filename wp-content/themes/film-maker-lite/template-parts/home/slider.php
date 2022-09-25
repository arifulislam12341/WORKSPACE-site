<?php
/**
 * Template part for displaying slider section
 *
 * @package Film Maker Lite
 * @subpackage film_maker_lite
 */

?>

<?php if( get_theme_mod( 'film_maker_lite_slider_arrows') != '') { ?>

<section id="slider">
  <div class="topbar-home">
    <?php get_template_part( 'template-parts/header/top-home', 'header' ); ?>
  </div>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
    <?php $film_maker_lite_slide_pages = array();
      for ( $count = 1; $count <= 4; $count++ ) {
        $mod = intval( get_theme_mod( 'film_maker_lite_slider_page' . $count ));
        if ( 'page-none-selected' != $mod ) {
          $film_maker_lite_slide_pages[] = $mod;
        }
      }
      if( !empty($film_maker_lite_slide_pages) ) :
        $args = array(
          'post_type' => 'page',
          'post__in' => $film_maker_lite_slide_pages,
          'orderby' => 'post__in'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $i = 1;
    ?>
    <div class="carousel-inner" role="listbox">
      <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
          <img src="<?php esc_url(the_post_thumbnail_url('full')); ?>"/>
          <div class="carousel-caption">
            <div class="inner_carousel">
              <?php if( get_theme_mod( 'film_maker_lite_slider_top_content' ) != '') { ?>
                <p><?php echo esc_html( get_theme_mod('film_maker_lite_slider_top_content','')); ?></p>
              <?php }?>
              <h2><?php the_title(); ?></h2>
              <div class="more-btn">
                <a href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','film-maker-lite'); ?></a>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; endwhile;
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
    endif;?>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
    </a>
  </div>
  <div class="clearfix"></div>
</section> 

<?php } ?>