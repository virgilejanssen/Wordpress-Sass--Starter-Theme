<?php get_header(); ?>


	<?php while ( have_posts() ) : the_post(); ?>
	
		<article <?php post_class(); ?>>
			<?php the_post_thumbnail(); ?>			
			<?php the_title(); ?>		
			<?php the_content(); ?>
		</article>
		
	<?php endwhile; ?>


<?php get_footer(); ?>