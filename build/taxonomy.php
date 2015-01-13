<?php get_header(); ?>

<h1><?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?></h1>

<?php $termDiscription = term_description( '', get_query_var( 'taxonomy' ) );
if($termDiscription != '') { ?>
	<p><?php echo $termDiscription; ?></p>
<?php } 

query_posts($query_string . '&orderby=menu_order&order=ASC&posts_per_page=-1');
if (have_posts()) { while (have_posts()) { the_post(); ?>
	<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
	<?php		
}} 

get_footer(); ?>