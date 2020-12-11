<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ittstheme
 */

?>
   <div class="subscribe-container">
        <div class="content">
            <h1>Restez à jour</h1>
            <h3>Abonnez vous à la newsletter et recevez toutes nos nouvautés</h3>
            <div class="subscribe">
                <form action="#">
                    <input type="email" placeholder="Entrez votre adresse mail" name="email">
                    <button type="submit">S'abonner</button>
                  </form>
            </div>
        </div> 
       
    </div>
	
	<div onClick="scrollUp()" id="scroll-arrow">
    <i class="fas fa-chevron-up"></i>
  </div>

	
	<footer>

				
	<div class="footer-content">

		<div class="footer-section about">
			<div class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
			</div>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer-1") ) : ?>
			<?php endif;?>
			
		</div>

		<div class="footer-section pages">
		<h3>Pages</h3>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer-2") ) : ?>
				<?php endif;?>
			  
		
		</div>

		<div class="footer-section ressources">
			<h3>Ressources</h3>  
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer-3") ) : ?>
			<?php endif;?>
		
		</div>
		
		<div class="footer-section socials">
			<h3>Coordonnées</h3>  
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer-4") ) : ?>
				<?php endif;?>
		</div>
	</div>

	<div class="footer-bottom">
		&copy;   It Talents School | 2021
	</div>
		
	</footer>


<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.5.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>


</body>
</html>
