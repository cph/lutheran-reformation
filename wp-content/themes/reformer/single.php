<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Reformer
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>

				<?php the_post_navigation(); ?>
				<a href="http://twitter.com/intent/tweet?status=<?php print(urlencode(the_title())); ?>+<?php print(urlencode(get_permalink())); ?>"><i class="icon-twitter"></i></a>
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- .container -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
