<?php /* Template Name: Startpage */ ?>

<div class="l-container">
	<?php $detect = new Mobile_Detect; // Ladda på detect ramverket för att sniffa grej

	if($detect->isMobile() && !$detect->isTablet()){ // om det här är en handhållen grej men INTE tablet.. vad är kvar? MOBILER!
	
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'mobile' );	// Ladda variabeln med url för mobiler
		
	} elseif($detect->isMobile()){ // Ovan stämde inte in. Hade det varit en mobil hade snurran inte fortsatt hit. Så vad är kvar? PADDOR!
	
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'tablet' ); // Ladda variabeln med url för paddor
		
	} else { // Inget av ovan stämde in. Vad är kvar? Röset aka DESKTOPS!
	
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'desktop' ); // ladda variablen med url för vad som är kvar - desktops
		
	}	$url = $thumb['0']; ?>

	<div class="l-container a-post-thumb" style="background-image: linear-gradient(to bottom, rgba(235,235,235,0) 0%,rgba(235,235,235,0) 50%,rgba(235,235,235,1) 100%), url('<?php echo $url ?>'); !important;">
		<?php get_header(); ?> 
			<div class="l-span-A9 l-span-C3">
				<div class="l-span o-wrap">
					<?php if ( !function_exists('register_sidebar') || !dynamic_sidebar('Sidebar') ) {} ?>
				</div>
			</div>
			
			
			<article class="l-span-A12 l-span-C9">
				
				<?php
				if (have_posts()) { while (have_posts()) { the_post(); ?>
					<p class="a-start"><?php $bloginfo = get_bloginfo(); ?></p>
				<div class="l-span o-paper">	
					<?php the_content();
						
				}}; ?>
				</div> 
			<article>
		<?php get_footer(); ?>	
	</div>
</div>

