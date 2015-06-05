<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Boom Shakalaka
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <?php //echo do_shortcode( '[rpf]' ); ?>


<?php if ( have_posts() ) : ?>
          
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

      <?php while ( have_posts() ) : the_post(); 
      if( $wp_query->current_post == 0 && !is_paged() ){ ?>
        <div class="item active">
      <?php } else { ?>
        <div class="item">
      <?php } ?>
          <div class="inner-item container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 style="text-align:center;"><?php the_title(); ?></h2>
                <?php the_content(); ?>
              </div>
            </div>
          </div>
      </div>
      <?php endwhile; ?>
      </div>


  <!-- Left and right controls -->
  <a class="left carousel-control-bs" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control-bs" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  

  
<?php else : ?>

<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

		</main><!-- #main -->

<div class="row" style="height:30px;margin-top:20px;background-image:linear-gradient(#DDD, #FFF);">
</div>
          
          
        <div id="about" class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
          <?php 

          // The Query
          $homepage = new WP_Query( 'pagename=front-page-content' );

          // The Loop
          if ( $homepage->have_posts() ) {
              while ( $homepage->have_posts() ) {
                  $homepage->the_post();
                  the_content();
              }
          } else {
              // no posts found
          }
          /* Restore original Post Data */
          wp_reset_postdata();

          ?>
            </div>
            </div>
        </div>
	</div><!-- #primary -->

<?php get_footer(); ?>
