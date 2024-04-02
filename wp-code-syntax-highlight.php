<?php

/*
 * Plugin Name:       CTD Code Syntax Highlight
 * Description:       Syntax highlighting for code blocks.
 * Version:           1.0
 * Author:            Chris Taylor
 * Author URI:        https://christaylordeveloper.co.uk
 */

function wp_code_syntax_highlight() {
    wp_register_style( 'highlight-js-css', 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/default.min.css' );
    wp_enqueue_style( 'highlight-js-css' );

    wp_register_script( 'highlight-js-min', 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js', null, null, true );
    wp_enqueue_script( 'highlight-js-min' );

    wp_register_script( 'highlight-all', plugins_url( '/highlight-all.js' , __FILE__ ), array( 'highlight-js-min' ) );
    wp_enqueue_script( 'highlight-all' );
}
add_action( 'wp_enqueue_scripts', 'wp_code_syntax_highlight' );
