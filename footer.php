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
            <h1>RESTEZ A JOUR !</h1>
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
			<p> IT Talents School est un établissement privé de formation professionnelle dans les domaines des TIC et de l’Informatique, du management et
				des langues. L’offre de formation d’IT Talents School s’adresse principalement aux organismes,entreprises et institutions. </p>
		</div>

		<div class="footer-section pages">
			<h3>Pages</h3>  
			<?php wp_nav_menu(array('menu'=>'footer')); ?>
			<!--ul class="pages-items">
				<li class="pages-link"><a href="formations.html">Formations</a></li>
				<li class="pages-link"><a href="planning.html">Planning</a></li>
				<li class="pages-link"><a href="recrutement.html">Recrutement</a></li>
				<li class="pages-link"><a href="about.html">A propos</a></li>
				<li class="pages-link"><a href="contact.html">Contact</a></li>
			</ul-->
		</div>

		<div class="footer-section ressources">
			<h3>Ressources</h3>  
			<ul class="ressources-items">
				<li class="ressources-link"><a href="#">S'abonner</a></li>
				<li class="ressources-link"><a href="#">FAQ</a></li>
				<li class="ressources-link"><a href="#">Aide</a></li>
				
			</ul>
		</div>

		
		<div class="footer-section socials">
			<h3>Coordonnées</h3>  
			<ul class="contact">
				<li class="contact-item"><a href="#"> 
					<i class="fas fa-envelope"></i> contact@ittalents.dz
				</a></li>
				<li class="contact-item"><a href="#"> 
					<i class="fas fa-phone-alt"></i> +213 (0)23 78 10 28
				</a></li>
				<li class="contact-item"><a href="#">  
					<i class="fas fa-map-marked-alt"></i> 7 , Rue Larbi Sidi Ali - Kouba  /ALGER
				</a></li>  
			</ul>
			<ul class="socials-items">
				<li class="socials-link"><a href="#"> 
					<i class="fab fa-facebook-square"></i>
				</a></li>
				<li class="socials-link"><a href="#"> 
					<i class="fab fa-twitter-square"></i>
				</a></li>
				<li class="socials-link"><a href="#"> 
					<i class="fab fa-linkedin"></i>
				</a></li>
				
			</ul>
		</div>
	</div>

	<div class="footer-bottom">
		&copy;   Ittalentsschool | Designed by
	</div>
		
	</footer>


<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.5.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>


</body>
</html>
