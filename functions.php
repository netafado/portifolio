<?php 
/*
* Add scrits to wp_enqueue_scripts hook
*/
function add_scripts(){
	
	wp_enqueue_script('jquery');
	// Bootstrap Core CSS
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/dist/bootstrap/css/bootstrap.min.css','', 1.0);
	wp_enqueue_style('app', get_template_directory_uri() . '/css/app.css','', 1.0);
	// Bootstrap Core JS
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/dist/bootstrap/js/bootstrap.min.js',	'', '', false);
	wp_enqueue_script('bootstrap-modal-js', get_template_directory_uri() . '/dist/bootstrap/js/modal.js',	'', '', true);


	wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js','', '', true);
	if(is_home())
		wp_enqueue_script('app-home', get_template_directory_uri() . '/js/app-home.js','', '', true);
}

//HOOKS
add_action('wp_enqueue_scripts', 'add_scripts');
?>