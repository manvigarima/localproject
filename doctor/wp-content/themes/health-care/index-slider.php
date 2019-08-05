<?php
	$current_options = wp_parse_args( get_option('hc_lite_options', array() ), theme_data_setup());
	$slider_post_one = $current_options['slider_post'];
	$slider_post = array($slider_post_one);
	if($current_options['home_slider_enabled'] == false) {
	if( $slider_post ){
	?>
	<div class="row" style="position:relative" >
		<?php
			$slider_query = new WP_Query( array( 'post__in' => $slider_post , 'ignore_sticky_posts' => 1));
				if( $slider_query->have_posts() ){                
					while( $slider_query->have_posts() ){
						$slider_query->the_post();		
			$defalt_arg =array('class' => "img-responsive");
			if( has_post_thumbnail() ){ ?>
		<?php the_post_thumbnail('', $defalt_arg);  ?>
		<div class="slide-caption">
			<div class="slide-text-bg1"><h1><?php the_title(); ?></h1>
			</div>
			<div class="slide-text-bg2"><span><?php the_content(); ?></span>
			</div>
		</div>
	<?php } } } ?>
	</div>
	<?php } }?>