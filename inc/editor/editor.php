<?php
function enqueue_editor_modifications()
{
    wp_enqueue_script('gutenberg-customisation', get_theme_file_uri('/inc/editor/gutenberg-customisation.js'), NULL, '1.0.0', true);
}
add_action('enqueue_block_editor_assets', 'enqueue_editor_modifications');
