<?php get_header(); ?>

<h1><?php post_type_archive_title(); ?></h1>

<?php query_posts($query_string . '&orderby=menu_order&order=ASC&posts_per_page=-1');
if (have_posts()) { while (have_posts()) { the_post(); ?>
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	<?php		
}} 

$args = array( 'hide_empty=0' );
$terms = get_terms('type', $args);
$count = count($terms); $i=0;
if ($count > 0) {
	$term_list = '<ul class="my_term-archive">';
  foreach ($terms as $term) {
  	$i++;
    $term_list .= '<li><a href="' . get_term_link( $term ) . '" title="' . sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name) . '">' . $term->name . '</a></li>';
   	if ($count != $i) $term_list .= ''; else $term_list .= '</ul>';
  }
  echo $term_list;
} 


<?php get_footer(); ?>