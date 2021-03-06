<?php
/*
 * Template Name: Sans Sidebar
 * Description: Page template without sidebar
 */

get_header(); ?>

	<div id="primary" class="full-content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
	</div><!-- #primary -->
<div class="page-extras">
	<?php if( dynamic_sidebar('footer-widget-area-1') ) : else : endif; ?>
</div>
<?php get_footer(); ?>
