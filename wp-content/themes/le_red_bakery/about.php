
<?php /* Template Name: Full width */ ?>

<?php
/**
 * Template for displaying about page.
 * 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<!-- <div class="site-wrapper"> -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="entry-header">
				<h1 class="entry-title">Learn About Our Team and Culture</h1>
				<p class= "tagline"><?php echo esc_html( CFS()->get('subtitle')); ?></p>
			</section>

			<hr class="decorative"::after></hr>

			<div class="entry-content">
				<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<div class="about-parts">

					<section class= "about-parts-item"><?php echo ( CFS()->get('team')); ?></section>

					<section class= "about-parts-item"><?php echo ( CFS()->get('bakery')); ?></section>

				</div>

				<section class= "story"><?php echo ( CFS()->get('story')); ?></section>
			</div>

			<?php endwhile; ?>
			<?php endif; ?>

		<section class="warning">
			<p>
				<span> Feel free to contact us with any questions coments or suggestions. We even take custom orders!</span>
				<a href="<?php echo home_url('/contact/');?>" class="btn"> Contact Us</a>
			</p>
		</section>


		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>