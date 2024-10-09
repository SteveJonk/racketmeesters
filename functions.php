<?php

// Exit if accessed directly
if (!defined("ABSPATH")) {
    exit();
}

// Main switch to get frontend assets from a Vite dev server OR from production built folder

require_once "inc/inc.vite.php";

// Include needed functions
require_once "inc/custom-post-types.php";
require_once "inc/editor/editor.php";
require_once "inc/components/login-screen.php";
require_once "inc/components/navbar.php";
require_once "inc/components/sidebars.php";
require_once "inc/components/group-block-style.php";
require_once "inc/components/image-block-style.php";
require_once "inc/components/button-block-style.php";
require_once "inc/components/typography-block-style.php";
require_once "inc/components/list-block-style.php";
require_once "inc/components/testimonial-carousel.php";

function theme_support()
{
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("responsive-embeds");
    add_theme_support("wp-block-styles");
    add_theme_support("appearance-tools");
    add_theme_support("align-wide");
    add_theme_support("editor-styles");

    register_nav_menu("headerMenuLocation", "Header Menu Location");
    add_editor_style("editor.css");
}

add_action("after_setup_theme", "theme_support");

// Remove Archive functionality 
function disable_standard_post_archives()
{
    if (is_category() || is_tag() || is_date() || is_author() || is_post_type_archive('post')) {
        wp_redirect(home_url(), 301); // Redirect to the homepage or any other URL
        exit;
    }
}
add_action('template_redirect', 'disable_standard_post_archives');
