<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="product-title">
				<?php the_archive_title ('<h1>', '</h1>');?>
				
				<p> We are a team of creative and talented individuals who love making delicious treats.</p>
			</div>

			<hr class="decorative"::after></hr>

			<div class="products-archive">
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

	<div class="grid">
		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>


			<?php /* Start the Loop */ ?>
				
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="productsgrid">
					<a href="<?php the_permalink();?>">
					<?php the_post_thumbnail( 'medium' ); ?></a>
				<?php endif; ?>
				<div class="poductsinfo">
					<span class="product-title2"><?php echo get_the_title( ); ?>
					<span class= "price"><?php echo esc_html ( CFS() -> get ('price')); ?></span></p>
				</div>
				</div>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
