<?php
/**
 * Template Name:Page with Left Sidebar
 */

get_header(); ?>

<?php do_action( 'vw_hospital_lite_pageleft_top' ); ?>

<div class="container">
    <div class="middle-align row">       
		<div class="col-md-4">
			<?php get_sidebar('page'); ?>
		</div>		 
		<div class="col-md-8" id="content-vw" >
			<?php while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php
                //If comments are open or we have at least one comment, load up the comment template
                	if ( comments_open() || '0' != get_comments_number() )
                    	comments_template();
                ?>
            <?php endwhile; // end of the loop.
             wp_reset_postdata();
            ?>
        </div>       
        <div class="clear"></div>    
    </div>
</div>

<?php do_action( 'vw_hospital_lite_pageleft_bottom' ); ?>

<?php get_footer(); ?>