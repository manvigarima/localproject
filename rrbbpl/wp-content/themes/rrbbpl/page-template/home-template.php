<?php
/*
* Template Name: Home Template

 */

get_header(); ?>

<div class="banner">
<?php echo do_shortcode('[rev_slider home_banner]');?>
<div class="caption_wrapper">
<div class="caption_container">
<?php if( have_rows('banner_caption') ): ?>
	<?php while( have_rows('banner_caption') ): the_row(); ?>
<div class="caption_box"><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></div>
	<?php endwhile; ?>
<?php endif; ?>
<div class="clr"></div>
</div>
</div>
</div>

<div class="home_story_container">
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

</div>

<div class="home_programm">
<h3><?php the_field('program_title');?></h3>
<img src="<?php bloginfo('template_url');?>/images/l3.png" />
</div>
<div class="home_service_wrapper">
<div class="home_service_container">
<?php if(get_field('program_list')): ?>
<?php while(has_sub_field('program_list')): ?>
<a href="<?php the_sub_field('program_link'); ?>">
<div class="home_service_box">
<img src="<?php the_sub_field('program_image'); ?>" />
<h4><?php the_sub_field('program_title'); ?></h4>
</div>
</a>
<?php endwhile; ?>
<?php endif; ?>
<div class="clr"></div>
</div>
</div>

<div class="home_programm">
<h3><?php the_field('contact_title'); ?></h3>
<img src="<?php bloginfo('template_url');?>/images/l3.png" />
</div>
<div class="home_contact_wrapper">
<div class="home_contact_container">
<?php echo do_shortcode('[contact-form-7 id="40" title="Home Contact Form"]');?>
<div class="clr"></div>
</div>
</div>
<div class="home_container">
<?php the_field('home_content'); ?>
<div class="clr"></div>
</div>

<?php get_footer(); ?>




