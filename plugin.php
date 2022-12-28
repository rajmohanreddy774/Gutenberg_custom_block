<?php
/*
 * Plugin Name: Gutenberg Block Demo
 * Version:           0.1.0
 * Author:            Raj
*/
function guten_demo_register_block()
{
    //handler for editor script
    wp_register_script(
        'guten-demo-editor-script',
        plugins_url('build/editor.js', __FILE__),
        array('wp-blocks'),
        //timestamp to register time whenever code changes
        filemtime(plugin_dir_path(__FILE__) . 'build/editor.js')
    );
    //handler for front end style
    wp_register_style(
        'guten-demo-style',
        plugins_url('build/style.css', __FILE__),
        [],
        filemtime(plugin_dir_path(__FILE__) . 'build/style.css')
    );
    //handler for editor styles
    wp_register_style(
        'guten-demo-editor-style',
        plugins_url('build/editor.css', __FILE__),
        [],
        filemtime(plugin_dir_path(__FILE__) . 'build/editor.css')
    );

    //registor_block_type is a function used to enqueue styles and scripts
    register_block_type('myfirstblock/guten-demo', array(
        'editor_script' => 'guten-demo-editor-script',
        'editor_style' => 'guten-demo-editor-style',
        'style' => 'guten-demo-style'
    ));
}
add_action('init', 'guten_demo_register_block');
