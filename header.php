<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ittstheme
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo('title')?> | <?php the_title(); ?> </title>

    <!-- CSS Style Sheet -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    
    <!-- CSS for the Slider-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
    
	<!-- Icons stylesheet-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/flaticon.css">

	
	<?php wp_head(); ?>

</head>
<body>

    <header >
            <div class="header-top">
                
            </div>
            <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
            </div>

            
               <?php wp_nav_menu(array('menu'=>'Menu')); ?>

              
                
            <form class="search" method="get" action="<?php esc_url(home_url('/')); ?>">
                    <input type="text" placeholder="Search.." name="search">
                    <button  type="submit"><i  class="fas fa-search"></i></button>
            </form>
            <div class="menu-mobile">
                <i  class="fas fa-search search-btn"></i>
                <i class="fas fa-bars menu-btn"></i>
            </div>
            <div class="close-search">
                <i  class="fas fa-times"></i>
            </div>


    </header>
