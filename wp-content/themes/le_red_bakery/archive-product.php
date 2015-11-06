<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="products">
				<?php 
					$taxonomy = 'product-type';
					$terms = get_terms($taxonomy);
					if ($terms) :
					 foreach($terms as $term) :
					 ?> 
					 <div class="product-type">
						 
						  <a href="<?php echo get_term_link($term); ?>"> 
						   	<img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $term->slug;?>.png"/></br> 
						   	<h3><?php echo $term->name;?></h3> </a>
					 </div>	
					<?php endforeach; 
					?>
				<?php endif; ?>
		</div>

		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>


			<?php /* Start the Loop */ ?>
			
			<div class="grid">
				<?php
					get_template_part( 'template-parts/content' );
				?>
				<p class= "price"> Price: <?php echo esc_html ( CFS() -> get ('price')); ?></p>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
