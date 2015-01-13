<?php get_header();


	the_title();

	
	if (have_posts()) { while (have_posts()) { the_post();

	}} 


get_footer(); ?>