<?php
/**
 * Template Name: Right LP
 */
get_header(); ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://www.revenuegrowthfund.com/wp-content/themes/rgf/css/landing-page.css" media="all">
<p class="top_section"><span><?php the_title(); ?></span></p>
	<div class="teamplate-content wrap">
    <div class="teamplate-content-left-img">
			<img src="<?php the_field('image');?>" alt="">
		</div>
		<div class="teamplate-content-left">
			<main id="primary" class="site-main">
			<div>
				<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>
			</div>
		</main><!-- #main -->
		</div>
	</div>
    
<?php get_footer();?>