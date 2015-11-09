<?php
/**
 * The Product Type Taxonomy Page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div class="taxonomy-product-type">
	<div id="primary-1" class="content-area">
	
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="eachproduct">
				<div class="pic"> 
				<?php the_post_thumbnail( 'medium' ); ?>
				</div>
				<div class="picinfo">
				<a href="<?php the_permalink();?>"> <?php the_title('<h3 class="entry-title">', '</h3>' ); ?></a>
				<?php the_content(); ?>
				<p class= "price"> Price: <?php echo esc_html( CFS()->get('price')); ?></p>
				</div>
				</div>

			<?php endwhile; ?>
			<?php the_posts_navigation();?>
		<?php else: ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>	
		<?php endif; ?>		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>