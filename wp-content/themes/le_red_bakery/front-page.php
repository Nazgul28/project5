<?php
/**
 * The template for displaying home page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="hero">
			<span class="herotext"><h1>baked to perfection.</h1></span>
		</div>
		<div class="products">
			<div class="bread">
				<img class="bread" src="<?php echo get_template_directory_uri(); ?>/images/bread.png"/>
				<h2> bread </h2>
				<p> Bread is the ultimate comfort food! Our lust-worthy loaves will satisfy your most intense carb cravings.</p>
				<a href="<?php echo get_permalink( get_page_by_path( ‘products’ ) ) ?>">See more ...</a>
			</div>

			<div class="coffee">
				<img class="coffee" src="<?php echo get_template_directory_uri(); ?>/images/coffee.png"/>
				<h2> coffee </h2>
			</div>
			<div class="pretzels">
				<img class="pretzels" src="<?php echo get_template_directory_uri(); ?>/images/pretzels.png"/>
				<h2> pretzels </h2>
			</div>
			<div class="sweets">
				<img class="sweets" src="<?php echo get_template_directory_uri(); ?>/images/sweets.png"/>
				<h2> sweets </h2>
			</div>
		</div>

		<section class="warning">
		</section>

		<section class="latestnews">
		</section>

		<section class="testimonials">
		</section>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
