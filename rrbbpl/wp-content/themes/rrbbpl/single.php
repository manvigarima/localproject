<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="inner_banner">
<?php dynamic_sidebar('sidebar4'); ?>
<div class="inner_caption">
<h1><?php the_title();?></h1>
</div>
</div>

<div class="container">
<div class="post_details">
<?php the_post_thumbnail(); ?>
<h3><?php the_title();?></h3>
<h5><?php the_time('jS \o\f F Y'); ?></h5>
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				//comments_template();
			}


			// End of the loop.
		endwhile;
		?>

<div class="clr"></div>
</div>
</div>
<?php get_footer(); ?>
