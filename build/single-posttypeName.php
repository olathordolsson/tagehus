<?php get_header(); ?>

<h1><?php the_title(); ?></h1>

<?php if (have_posts()) { while (have_posts()) { the_post(); 
	the_terms( $post->ID, 'superpowers', '', ', ', ' ' );
	 get_template_part( 'example'); 
			
}} 

get_footer(); ?>