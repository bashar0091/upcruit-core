<?php

// css and js file include 
function my_plugin_enqueue_styles() {

    // css file include here 
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'upcruit-custom', plugin_dir_url( __FILE__ ) . 'assets/css/style.css' );

    //js file include here
    wp_enqueue_script( 'money-calculator-script', plugin_dir_url( __FILE__ ) . 'assets/js/money-calculator.js',  array('jquery'), '', true );
    wp_enqueue_script( 'time-calculator-script', plugin_dir_url( __FILE__ ) . 'assets/js/time-calculator.js',  array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'my_plugin_enqueue_styles' );