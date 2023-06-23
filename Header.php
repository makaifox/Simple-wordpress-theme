<!DOCTYPE html>
<html <?php language_attributes(); ?> <head>
<title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <nav class="navbar">
    <button class="navbar-toggler d-block d-lg-none" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
      <img class="icon" src="<?php echo get_template_directory_uri() . '/src/assets/ic.menu.png'; ?>" alt="icon">
    </button>
    <div class="d-none d-lg-block"></div>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-center"> <img class="logo" src="<?php echo get_template_directory_uri() . '/src/assets/Header.png'; ?>" alt="logo"></a>
    <?php get_search_form(); ?>
    <div class="collapse navbar-collapse menu-drop " id="navbarHeader">
      <ul class="navbar-nav mr-auto">
        <div class="d-block d-lg-none">
          <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
        </div>
      </ul>
    </div>
  </nav>
  <nav class="navbar desktop-navbar d-none d-lg-block">
    <?php wp_nav_menu(array('theme_location' => 'desktop-header-menu')); ?>
  </nav>