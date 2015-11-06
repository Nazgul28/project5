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
		</section>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
