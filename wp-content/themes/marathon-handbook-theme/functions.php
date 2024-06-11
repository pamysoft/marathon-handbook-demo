<?php
function marathon_handbook_enqueue_styles() {
    wp_enqueue_style('google-fonts-archivo', 'https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap', false);
    wp_enqueue_style('google-fonts-lora', 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap', false);
    wp_enqueue_style('marathon-handbook-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'));
    wp_enqueue_style('marathon-handbook-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), filemtime(get_template_directory() . '/assets/css/custom.css'));
}
add_action('wp_enqueue_scripts', 'marathon_handbook_enqueue_styles');

function marathon_handbook_enqueue_block_editor_assets() {
    wp_enqueue_style('google-fonts-archivo', 'https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap', false);
    wp_enqueue_style('google-fonts-lora', 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap', false);
    wp_enqueue_style('marathon-handbook-block-editor-styles', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'));
    wp_enqueue_style('marathon-handbook-block-editor-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), filemtime(get_template_directory() . '/assets/css/custom.css'));
}
add_action('enqueue_block_editor_assets', 'marathon_handbook_enqueue_block_editor_assets');


// Register custom block category and custom block
function marathon_handbook_acf_init() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'custom-block',
            'title'             => __('Two Column Block'),
            'description'       => __('A custom block with two columns for Marathon Handbook.'),
            'render_template'   => 'template-parts/blocks/custom-block/custom-block.php',
            'category'          => 'layout',
            'icon'              => 'columns',
            'keywords'          => array('two column', 'block', 'marathon'),
        ));
    }
}
add_action('acf/init', 'marathon_handbook_acf_init');
