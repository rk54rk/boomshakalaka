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
      <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <ul class="top-menu">
                <li class="top-menu-li"><a href="javascript:history.go(-1)">Back</a></li> 
              </ul>
            </div>
          </div>
      </div>

<?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="recent-project container-fluid">
            <div class="row">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-3 article">
                    <h3><?php the_title(); ?></h3>
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
          
</div><!-- #primary -->

<?php get_footer(); ?>
