<?php
/*
* Template Name: Services Template

 */

get_header(); ?>
<div class="inner_banner">
<?php the_post_thumbnail(); ?>
<div class="inner_caption">
<h1><?php the_title();?></h1>
</div>
</div>

<div class="container">
<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				//comments_template();
			}

			// End of the loop.
		endwhile;
		?>
        

<div class="services_list">
<?php if(get_field('services_list')): ?>
<?php while(has_sub_field('services_list')): ?>
<div class="services_box">
<?php 
if(get_sub_field('service_image'))
{?>
<img src="<?php the_sub_field('service_image'); ?>" />	
<?php }
else 
{?>
<?php }?>
<h4><?php the_sub_field('service_title'); ?></h4>
<?php the_sub_field('service_content'); ?>
<div class="clr"></div>
<div class="apply"><a href="?page_id=13">Service Enquiry</a></div>
</div>
<?php endwhile; ?>
<?php endif; ?>
        
</div>
<div class="clr"></div>
</div>




<?php get_footer(); ?>




