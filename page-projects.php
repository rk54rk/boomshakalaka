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

  <?php 

query_posts( array(
    'posts_per_page' => 10,
	'author' => 1,
    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
 ));

if (have_posts()) :?><?php while(have_posts()) : the_post(); ?> 
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
  		<div id="pagination" style="padding-top:15px;text-align:center">
		
			<?php
			global $wp_query;
			
			$big = 999999999; // need an unlikely integer
			
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages
			) );
			?>
			
		</div>
</div>
<?php else : ?>

<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?> 
  
</main><!-- #main -->
          
</div><!-- #primary -->

<?php get_footer(); ?>
