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

<?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="recent-project container-fluid">
            <div class="row">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <div><?php the_content(); ?></div>
                  </div>
                </div>
              </div>
          </div>
      </div>
      <?php endwhile; ?>
</div>

  

  
<?php else : ?>

<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

		</main><!-- #main -->
          
<div class="container-fluid about">
  <div class="row">
        <div class="container">
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
    </div>
  </div>
</div><!-- #primary -->

<?php get_footer(); ?>
