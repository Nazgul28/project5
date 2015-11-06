

<?php
/**
 * Template Name: About page.
 * Template: full width.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div class="site-wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php echo CFS()->get( 'title' ); ?>
				<?php echo CFS()->get( 'team' ); ?>
				<?php echo CFS()->get( 'bakery' ); ?>
				<?php echo CFS()->get( 'story' ); ?>

				





			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>