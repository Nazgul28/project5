<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div class="wrapper-single-product">
	<div id="primary-1" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="single-product-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'product' ); ?>


		<?php endwhile; // End of the loop. ?>
	</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>