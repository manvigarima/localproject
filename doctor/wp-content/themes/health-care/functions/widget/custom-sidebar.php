<?php	
add_action( 'widgets_init', 'health_care_widgets_init');
function health_care_widgets_init() {
	
	// Service Widget Sidebar	
	register_sidebar( array(
		'name' => __( 'Homepage service section - sidebar', 'health-care' ),
		'id' => 'health-care-sidebar-service',
		'description' => __('Use the widget WBR: HC Page Widget to add service type content','health-care'),
		'before_widget' => '<div id="%1$s" class="col-md-4 hc_service_area widget %1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}