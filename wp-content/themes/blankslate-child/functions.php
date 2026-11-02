<?php

function planty_enqueue_styles()
{
    wp_enqueue_style(
        'blankslate-parent',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'planty-child',
        get_stylesheet_uri(),
        array('blankslate-parent'),
        filemtime(get_stylesheet_directory() . '/style.css')
    );
}

add_action('wp_enqueue_scripts', 'planty_enqueue_styles');
