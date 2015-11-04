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
				<p> Start your day with decadent cup o' joe, or pop in for a mid-afternoon pick me up. Caffeine FTW.</p>
				<h2> coffee </h2>
			</div>
			<div class="pretzels">
				<img class="pretzels" src="<?php echo get_template_directory_uri(); ?>/images/pretzels.png"/>
				<p>Our soft-pretzels are available in a variety of flavours. When they taste this good, one is never enough!</p>
				<h2> pretzels </h2>
			</div>
			<div class="sweets">
				<img class="sweets" src="<?php echo get_template_directory_uri(); ?>/images/sweets.png"/>
				<h2> sweets </h2>
				<p>Our sinfully delicious sweets are simply irresistible! These gourmet treats will keep you coming back.</p>
			</div>
		</div>

		<section class="warning">
		</section>

		<section class="latestnews">
			<h2> Our Latest News </h2>
			<div class="container">
				<ul class="post-page">
				<?php
				$args = array( 'posts_per_page' => 4);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<li>
						<div class="postthumbnail">
							<?php the_post_thumbnail('medium'); ?>
						</div> 
						<div class="post-info">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></br>
							<?php the_time('d M Y'); ?>
							<?php comments_number(__('/ 0 Comments'), __(' / 1 Comments'), __(' / % Comments')) ?>
						</div>
					</li>
			<?php endforeach; 
			wp_reset_postdata();?>

				</ul>
		</div>
		</section>

		<section class="testimonials">
		</section>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
