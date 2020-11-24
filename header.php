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
    <title>IT Talents</title>

    <!-- CSS Style Sheet -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    
    <!-- CSS for the Slider-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
    
	<!-- Icons stylesheet-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/all.css">
	
	<?php wp_head(); ?>

</head>
<body>

    <header >
            <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
            </div>

            <nav class="navbar">
                <ul class="nav-items">
                    <li class="nav-link"><a class="active" href="index.html">Accueil</a></li>
                    <li class="nav-link"><a href="formations.html">Formations</a></li>
                    <li class="nav-link"><a href="recrutement.html">Recrutement</a></li>
                    <li class="nav-link"><a href="about.html">A propos</a></li>
                    <li class="nav-link"><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <form class="search" action="#">
                    <input type="text" placeholder="Search.." name="search">
                    <button  type="submit"><i  class="fas fa-search"></i></button>
            </form>
            <div class="menu">
                <i  class="fas fa-search search-btn"></i>
                <i class="fas fa-bars menu-btn"></i>
            </div>
            <div class="close-search">
                <i  class="fas fa-times"></i>
            </div>


    </header>
