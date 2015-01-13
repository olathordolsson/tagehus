<?php get_header(); 

single_tag_title();
if(tag_description()) {
	echo tag_description();
}

if (have_posts()) { while (have_posts()) { the_post(); ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	<?php get_template_part( 'exempel'); 		
}} 
	
get_footer(); ?>