<?php
function my_theme_setup() { // my_theme_setup() is hooked to the after_setup_theme action, which runs when WordPress initializes the theme. This function enables several features for the theme to support modern WordPress capabilities.
    
    /*
    The purpose of functions.php
    functions.php serves as the main entry point where you include other PHP files that contain different pieces of logic or functionality. This centralizes the management of theme features and functionalities, making it easier to understand the theme’s overall structure.
    Initialization: It’s the file where you typically initialize and hook in theme features, custom functionalities, and external scripts or styles.
    */

    // Add support for block styles.
    add_theme_support('wp-block-styles');
    // This enables the default block styles provided by WordPress. It ensures that the theme is compatible with core block styles, which are the default styles applied to blocks when using the block editor.

    // Add support for full and wide align images.
    add_theme_support('align-wide');
    // Allows the use of "wide" and "full" alignment options for blocks like images, galleries, and cover blocks in the block editor. This enables more flexible layouts and better design control.

    // Add support for editor styles.
    add_theme_support('editor-styles');
    // This feature allows the theme to load custom styles specifically for the block editor (WordPress admin editor). By enabling this, the theme can provide styles that make the editor look more like the front end of the site.

    // Enqueue editor styles.
    add_editor_style('style-editor.css');
    // Enqueues a custom stylesheet (style-editor.css) for the block editor. This stylesheet is applied only in the WordPress editor, not on the front end, allowing you to style blocks within the editor environment to match your front-end styles.

    // Add support for responsive embedded content.
    add_theme_support('responsive-embeds');
    // Enables responsive embedded content, such as YouTube videos or tweets, to ensure that embedded content scales appropriately on different screen sizes, maintaining a good user experience on both mobile and desktop devices.

    // Add support for custom line heights.
    add_theme_support('custom-line-height');
    // Adds support for custom line heights in the block editor. This allows users to set custom line heights for text blocks, providing more control over typography.

    // Add support for experimental link color control.
    add_theme_support('experimental-link-color');
    // Enables the ability to customize link colors in the block editor. This feature is experimental and gives users control over the color of links within their content blocks.


    // Add support for custom spacing control.
    add_theme_support('custom-spacing');
    // Adds support for custom spacing, such as margin and padding controls for blocks in the block editor. This provides more control over the layout and spacing between elements.

    // Add support for custom units.
    add_theme_support('custom-units');
    // Allows the use of custom units (e.g., px, em, rem, vh, vw) for sizing controls in the block editor

    // Add support for full site editing.
    add_theme_support('block-templates');
    // IMPORTANT - This enables support for Full Site Editing (FSE) using block-based templates. When enabled, the theme can use .html files (like index.html, single.html, page.html) in the templates/ folder to define the overall structure of the site using blocks.

    add_theme_support( 'wp-block-style' );
}

function enqueue_custom_styles() {
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/custom-styles.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

// Hook the setup function to 'after_setup_theme'.
add_action('after_setup_theme', 'my_theme_setup');
// This line hooks the my_theme_setup function to the after_setup_theme action. This action hook runs after the theme is initialized but before any templates are loaded. It’s the recommended place to add theme setup functions.



?>
