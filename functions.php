<?php

// Admin Bar
add_theme_support('admin-bar', array('callback' => '__return_false'));

// Adiciona o normalize.css para padronizar o layout da pagina.
function add_normalize_CSS()
{
  wp_enqueue_style('normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}

// adiciona o bootstrap 

require_once('src/bs4navwalker.php');

function enqueue_styles()
{
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/src/css/bootstrap.min.css');
  wp_enqueue_style('core', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');
function enqueue_scripts()
{
  wp_enqueue_script(
    'bootstrap',
    get_template_directory_uri() . '/src/js/bootstrap.bundle.min.js',
    array('jquery')
  );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

// registra o navigation menu
function add_Main_Nav()
{
  register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'add_Main_Nav');

// registra outro navigation menu
function add_Desktop_Nav()
{
  register_nav_menu('desktop-header-menu', __('desktop header menu'));
}
add_action('init', 'add_Desktop_Nav');

// registra o footer menu
function add_Footer_Nav()
{
  register_nav_menu('footer-menu', __('Footer Menu'));
}
add_action('init', 'add_Footer_Nav');
