<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Visual Designer || UX/UI Designer">
    <title><?php if (is_front_page()) {
                echo get_bloginfo('name');
            } else {
                echo the_title();
            } ?> - <?php echo get_bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class();
        $color = '';
        if (is_front_page()) {
            $color = 'color-white';
        } else {
            $color = 'color-black';
        }
        ?>>
    <header class="header__container <?php if (is_front_page()) echo 'header__absolute'; ?> roboto <?php echo $color ?>">
        <h1><a href="/" class="header__title"><?php echo get_bloginfo('name'); ?></a></h1>
        <nav class="header__nav">
            <?php $nav_menu = wp_get_nav_menu_items(3);
            foreach ($nav_menu as $navItem) {
                echo '<a class="header__nav-items ' . $color . '" href="' . $navItem->url . '" title="' . $navItem->title . '">' . $navItem->title . '</a>';
            }
            ?>
        </nav>
    </header>