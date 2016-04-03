<?php get_header(); ?>


	<?php if ( have_posts() ) : ?>
		
		<h1>Results for:<?php get_search_query(); ?></h1>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content' ); ?>
		<?php endwhile; ?>


	<?php else : ?>

		<h1>No Results Found</h1>

		<p>Search with different keywords:</p>
		<?php get_search_form(); ?>
			
	<?php endif; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>