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
				<?php 
					$taxonomy = 'product-type';
					$terms = get_terms($taxonomy);
					if ($terms) :
					 foreach($terms as $term) :
					 ?> 
					 <div class="product-type">
						 <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $term->slug;?>.png"/> 
						   <h3><?php echo $term->name;?></h3>
						   		<p><?php echo $term->description;?><a href="<?php echo get_term_link($term); ?>">See more...</a></p>
					 </div>	
					<?php endforeach; 
					?>
				<?php endif; ?>
		</div>

		<section class="warning">
			<p>
				<span> All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</span>
				<a href="http://localhost:3000/le_red_bakery/products/" class="btn"> See Our Products</a>
			</p>
		</section>

		<section class="latestnews">
			<h2> Our Latest News </h2>
			<div class="container">
				<hr class="decorative"::after></hr>
				<ul class="post-page">
				<?php
				$args = array( 'posts_per_page' => 4);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<li>
						<div class="postthumbnail">
							<?php the_post_thumbnail(); ?>
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
			<div class="testimonialsheader">
				<h2> What Others Say About Us </h2>
				<hr class="decorative"::after></hr>
			</div>
			<div class="testimonialscontainer">
				<ul>
					<li>
						<img class="headshot" src="<?php echo get_template_directory_uri(); ?>/images/testimonial-headshots/dr-dosist-headshot.png"/>
						<div class="reviewcontent">
							<p> Healthy food be damned! If you are a bakery and sweet addict like myself this place is life changing. So many goodies. Have a cheat day and eat all the pretzels!</p>
							<p class="reviewername"> Dr. Dosist </p>
							<p class-"reviewercredits"> Nutritionist -
								<a class="hyperlyink" href="http://www.redacademy.com"><span class="company"> Health Time Clinic</span></a>
							</p>
						</div>
					</li>
					<li>
						<img class="headshot" src="<?php echo get_template_directory_uri(); ?>/images/testimonial-headshots/maxi-milli-headshot.png"/>
						<div class="reviewcontent">
							<p> Do you like bread? Seriously, who doesn't? You have to check Le Red Bread's lovely loaves. Fresh flavours every day...need I say more?</p>
							<p class="reviewername"> Maxi Mili </p>
							<p class-"reviewercredits"> Chef -
								<a class="hyperlyink" href="http://www.redacademy.com"><span class="company"> Sailor Spoon </span></a>
							</p>
						</div>
					</li>
					<li>
						<img class="headshot" src="<?php echo get_template_directory_uri(); ?>/images/testimonial-headshots/ana-vandana-headshot.png"/>
						<div class="reviewcontent">
							<p>  Excellent cookies! They always have unique flavours and the cookies are always super fresh. Make sure you get them before they sell out! And keep an eye out on holidays, the flavour combinations they come up with are brilliant. Delicious!</p>
							<p class="reviewername"> Anna Vandana </p>
							<p class-"reviewercredits"> Author -
								<a class="hyperlyink" href="http://www.redacademy.com"><span class="company"> Food Is Great Magazine</span></a>
							</p>
						</div>
					</li>
					<li>
						<img class="headshot" src="<?php echo get_template_directory_uri(); ?>/images/testimonial-headshots/martha-m-masters-headshot.png"/>
						<div class="reviewcontent">
							<p> Where has this bakery been all my life! I absolutely love their cookies and muffins. Nom nom.</p>
							<p class="reviewername"> Martha M. Masters </p>
							<p class-"reviewercredits"> Food Critic -
								<a class="hyperlyink" href="http://www.redacademy.com"><span class="company"> WikiTravel </span></a>
							</p>
						</div>
					</li>
				</ul>
			</div>
		</section>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
