<?php
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('hello-elementor-child', get_stylesheet_uri(), ['hello-elementor-theme-style'], wp_get_theme()->get('Version'));
    wp_enqueue_script(
        'dbx-lightbox',
        get_stylesheet_directory_uri() . '/lightbox.js',
        [],
        null,
        true
    );
});

// Add a meta box for summary bullets
add_action('add_meta_boxes', function() {
    add_meta_box(
        'dbx_summary_bullets',
        'Summary Bullets',
        function($post) {
            $value = get_post_meta($post->ID, '_dbx_summary_bullets', true);
            echo '<textarea style="width:100%;min-height:100px;" name="dbx_summary_bullets">' . esc_textarea($value) . '</textarea>';
            echo '<p style="color:#666;font-size:0.95em;">Enter one bullet point per line. These will be shown as a summary at the top of the post.</p>';
        },
        'post',
        'normal',
        'high'
    );
});

// Save the meta box value
add_action('save_post', function($post_id) {
    if (array_key_exists('dbx_summary_bullets', $_POST)) {
        update_post_meta(
            $post_id,
            '_dbx_summary_bullets',
            sanitize_textarea_field($_POST['dbx_summary_bullets'])
        );
    }
}); 