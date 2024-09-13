<?php

function theme_sidebars()
{
    register_sidebar(array(
        'name' => 'Footer Top',
        'id' => 'footer-top',
        'description' => 'Deze sidebar zal worden getoond bovenop de footer',
        'before_widget' => '',
        'after_widget' => '',
    ));

    register_sidebar(array(
        'name' => 'Footer',
        'id' => 'footer',
        'description' => 'Deze sidebar zal worden getoond in de footer',
        'before_widget' => '',
        'after_widget' => '',
    ));
}

add_action('widgets_init', 'theme_sidebars');
