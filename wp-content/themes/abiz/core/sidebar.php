<?php
// Register widget area
add_action( 'widgets_init', 'abiz_widgets_init' );
function abiz_widgets_init() {
	
	// Sidebar Widget
	register_sidebar( 
		array(
			'name' => __( 'Main Sidebar Widget', 'abiz' ),
			'id' => 'sidebar-primary',
			'description' => __( 'Main Sidebar Widget', 'abiz' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) 
	);
	
	// Footer Sidebar 1
	register_sidebar( 
		array(
			'name' => __( 'Footer  Sidebar 1', 'abiz' ),
			'id' => 'footer-sidebar-1',
			'description' => __( 'The Footer Widget Area 1', 'abiz' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5><div class="widget_seperator"><span class="bg-primary"></span><span class="bg-white"></span><span class="bg-white"></span></div>',
		) 
	);
	
	// Footer Sidebar 2
	register_sidebar( 
		array(
			'name' => __( 'Footer  Sidebar 2', 'abiz' ),
			'id' => 'footer-sidebar-2',
			'description' => __( 'The Footer Widget Area 2', 'abiz' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5><div class="widget_seperator"><span class="bg-primary"></span><span class="bg-white"></span><span class="bg-white"></span></div>',
		) 
	);
	
	// Footer Sidebar 3
	register_sidebar( 
		array(
			'name' => __( 'Footer  Sidebar 3', 'abiz' ),
			'id' => 'footer-sidebar-3',
			'description' => __( 'The Footer Widget Area 3', 'abiz' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5><div class="widget_seperator"><span class="bg-primary"></span><span class="bg-white"></span><span class="bg-white"></span></div>',
		)
	);
	
	// Footer Sidebar 4
	register_sidebar( 
		array(
			'name' => __( 'Footer  Sidebar 4', 'abiz' ),
			'id' => 'footer-sidebar-4',
			'description' => __( 'The Footer Widget Area 4', 'abiz' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5><div class="widget_seperator"><span class="bg-primary"></span><span class="bg-white"></span><span class="bg-white"></span></div>',
		) 
	);


	// WooCommerce Sidebar
	if ( class_exists( 'WooCommerce' ) ) {
		register_sidebar( 
			array(
				'name' => __( 'WooCommerce Sidebar', 'abiz' ),
				'id' => 'sidebar-woocommerce',
				'description' => __( 'This Widget area for WooCommerce Widget', 'abiz' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget' => '</aside>',
				'before_title' => '<h5 class="widget-title">',
				'after_title' => '</h5>',
			) 
		);
	}
}