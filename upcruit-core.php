<?php
/**
 * Plugin Name: Upcruit Core
 * Description: Theme Core plugin including calculator, extra option and more.
 * Version:     1.0.0
 * Author:      Awal Bashar
 * Author URI:  bashar0091.github.io/awalbasharofficial/
 * Text Domain: upcruit
 */


// helper function call here 
require_once('helper-function.php');

// elementor widget register here 
function register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/calculator-widget.php' );

	$widgets_manager->register( new \calculator_widget() );

}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );
