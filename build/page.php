<?php get_header(); 

if (have_posts()) { while (have_posts()) { the_post(); ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a>
	<?php get_template_part( 'example'); 		
}} // end main loop 
	
get_footer(); ?>