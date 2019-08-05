<?php
/*
* Template Name: Blog Template

 */

get_header(); ?>
<div class="inner_banner">
<?php the_post_thumbnail(); ?>
<div class="inner_caption">
<h1><?php the_title();?></h1>
</div>
</div>
<div class="container">
<?php query_posts('cat=1&showposts'.'&paged='.get_query_var('paged'));?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="post_listing">
<div class="post_thumb"><a href="<?php the_permalink() ;?>"><?php the_post_thumbnail(); ?></a></div>
<div class="post_short_info">
<h3><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h3>
<h5><?php the_time('jS \o\f F Y'); ?></h5>
<p><?php $excerpt_length =240; // length of excerpt to show (in characters)

                      $the_excerpt = get_the_content(); 

                       if($the_excerpt != ""){

                            $the_excerpt = substr( $the_excerpt, 0, $excerpt_length );

                            echo strip_tags($the_excerpt) . '... ';

                            } 

 ?></p>
<div class="view_more"><a href="<?php the_permalink() ;?>">Read More</a></div>
</div>
<div class="clr"></div>
</div>
<?php endwhile; ?>
<!--Pagination-->
<div class="paginv">		
<?php wp_pagenavi(); ?>
</div>
<!--Pagination-->
<?php else : ?>
<?php endif; ?>


<div class="clr"></div>
</div>


<?php get_footer(); ?>




