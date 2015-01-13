<?php get_header(); ?>

<article>
</article>

<aside role="complementary">
</aside>

<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	<?php get_template_part( 'example'); 		
}} 

get_footer(); ?>