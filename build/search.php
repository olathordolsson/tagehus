<?php get_header(); ?>

<h1>S&ouml;ktresultat f&ouml;r <?php echo '&#145;'; the_search_query();echo '&#146;'; ?></h1>
<p>Visar <?php echo $wp_query->found_posts ?> tr&auml;ffar</p>

			
<?php if (have_posts()) { while (have_posts()) { the_post();

	get_template_part( 'parts/listitem_full');
	
} else { ?> 

	<h2>Pr&ouml;va att stava ditt s&ouml;kord annorlunda...</h2>
	<p><a href="<?php bloginfo('url'); ?>" title="Till startsidan f&ouml;r <?php bloginfo('blogtitle'); ?>">Till startsidan</a></p>
	<?php get_search_form(); ?>

<?php }

get_footer(); ?>