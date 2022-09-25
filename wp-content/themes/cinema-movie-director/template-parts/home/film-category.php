<?php
/**
 * Template part for displaying film category section
 *
 * @package Cinema Movie Director
 * @subpackage cinema_movie_director
 */
?>

<section id="film-category" class="py-5 text-center">
  <div class="container">
    <?php if( get_theme_mod( 'cinema_movie_director_film_category_heading' ) != '') { ?>
      <h2><?php echo esc_html(get_theme_mod('cinema_movie_director_film_category_heading')); ?></h2>
      <hr>
    <?php }?>
    <?php if( get_theme_mod( 'cinema_movie_director_film_category_heading_text' ) != '') { ?>
      <p class="heading-text"><?php echo esc_html(get_theme_mod('cinema_movie_director_film_category_heading_text')); ?></p>
    <?php }?>
    <div class="row mt-5">
      <?php $category = get_theme_mod('cinema_movie_director_category_increament');
      for ($i=1; $i <= $category; $i++) { ?>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="category-inner-box mb-4">
            <?php if( get_theme_mod('cinema_movie_director_category_box_icon'.$i) != '' ){ ?>
              <i class="<?php echo esc_html(get_theme_mod('cinema_movie_director_category_box_icon'.$i)); ?> mb-4"></i>
            <?php }?>
            <?php if( get_theme_mod('cinema_movie_director_category_box_title'.$i) != '' ){ ?>
              <h4><?php echo esc_html(get_theme_mod('cinema_movie_director_category_box_title'.$i)); ?></h4>
            <?php }?>
            <?php if( get_theme_mod('cinema_movie_director_category_box_text'.$i) != '' ){ ?>
              <p><?php echo esc_html(get_theme_mod('cinema_movie_director_category_box_text'.$i)); ?></p>
            <?php }?>           
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>