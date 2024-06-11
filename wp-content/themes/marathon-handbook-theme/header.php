<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="flex mb-10 mx-[15px] sm:mx-[40px] py-3">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?> Logo" class="w-[480px] h-auto">
        </a>
        <nav class="flex flex-1 ml-4 items-center justify-end">
            <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_class' => 'main-menu')); ?>
        </nav>
    </header>
    <main class="mx-[15px] sm:mx-[40px]">
