<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ittstheme
 */

get_header();
?>

<div class="main-container">
        <div class="main-content">
            <h1>Révélez vos </h1>
            <h1>compétences !</h1>
            <p class="main-text">
                Lorem ipsum dolor sit amet . Recusandae quam impedit architecto. Nisi sed qui similique doloribus vel corrupti iure?
            </p>
            
                <button onclick="document.location='planning.html'" class="btn" type="submit">Consulter le Planning   <i class="fas fa-long-arrow-alt-right"></i> </button>
            
        </div>
    </div>

    <div class="formations-container">
       <h1 class="title">Formations Garanties !</h1>  
       <div class=" owl-carousel owl-theme formations-slider " id="formations"> 
           <div class="formation-content">
               <img src="assets/images/CCNA.jpg">
               <div class="formation-info">
                   <h3>CCNA</h3>
                   <p>Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet.</p>
                   <button class="btn">S'INSCRIRE</button>
               </div>
           </div>
           <div class="formation-content">
                <img src="assets/images/oracle.png">
                <div class="formation-info">
                    <h3>Oracle</h3>
                    <p>Lorem ipsum dolor sit amet ipsum dolor sit amet. </p>
                    <button class="btn">S'INSCRIRE</button>
                </div>
            </div>
            <div class="formation-content">
                <img src="assets/images/cloud.png">
                <div class="formation-info">
                    <h3>Cloud</h3>
                    <p>Lorem ipsum dolor ipsum ipsum dolor dolor sit amet sit amet.</p>
                    <button class="btn">S'INSCRIRE</button>
                </div>
            </div>
            <div class="formation-content">
                <img src="assets/images/IBM.png">
                <div class="formation-info">
                    <h3>IBM</h3>
                    <p>Lorem ipsum dolor sit amet ipsum dolor sit amet.</p>
                    <button class="btn">S'INSCRIRE</button>
                </div>
            </div>
            <div class="formation-content">
                <img src="assets/images/Redhat.png">
                <div class="formation-info">
                    <h3>RedHat</h3>
                    <p>Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet..</p>
                    <button class="btn">S'INSCRIRE</button>
                </div>
            </div>
            <div class="formation-content">
                <img src="assets/images/Excel.png">
                <div class="formation-info">
                    <h3>EXCEL</h3>
                    <p>Lorem ipsum dolor sit amet ipsum dolor sit amet.</p>
                    <button class="btn">S'INSCRIRE</button>
                </div>
            </div>
       </div>
       <div class="owl-navigation">
           <span class="owl-nav-prev"><i class="fas fa-chevron-left"></i></span>
           <span class="owl-nav-next"><i class="fas fa-chevron-right"></i></span>
       </div>
    </div>

    <div class="articles-container">
        <div  class="article-content article1">
            <div class="image">
                <img src="assets/images/article1.jpg" >
            </div>
            <div id="article1" class="content">
                <div class="text">
                    <h2 class="title">MIEUX FORMER VOTRE TEAM !</h2>
                    <p class="content">
                        Nos formations sont destinées principalement aux organismes , entreprises et institutions , pour une meilleure productivité .
                    </p>
                </div>
                <div class="btn">
                    <button > En savoir plus <i class="fas fa-long-arrow-alt-right"></i></button>
                </div>
            </div>
        </div>
        <div class="article-content article2">
            <div class="image">
                <img src="assets/images/article2.jpg">
            </div>
            <div id="article2" class="content">
                <div class="text">
                    <h2 class="title">APPRENEZ LES BONNES PRATIQUES </h2>
                    <p class="content">
                        Notre école propose une grande gamme de formations dans les méthodes et les référentiels des bonnes pratiques.
                        </p>
                </div>
                <div class="btn">
                    <button > En savoir plus <i class="fas fa-long-arrow-alt-right"></i></button>
                </div>
            </div>    
        </div>
        <div class="article-content article3">
            <div class="image">
                <img src="assets/images/article3.jpg">
            </div>
            <div id="article3" class="content">
                <div class="text">
                    <h2 class="title">DÉCOUVREZ VOS TALENTS !</h2>
                    <p class="content">
                        Que vous soyez étudiant ,emplyé ou même amateur , IT Talents vous donnera la chance de découvrir vos talents et de les améliorer dans les différents domaines de compétences : switching & routing , project management , cybersécurité ,
                        systèmes d'exploitation et plein d'autres !
                    </p>
                </div>
                <div class="btn">
                    <button > En savoir plus <i class="fas fa-long-arrow-alt-right"></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="clients-container" >   
        <div class=" owl-carousel owl-theme clients-slider " id="clients"> 
            <div>
                <img src="assets/images/partner1.png">
                <div>
                    <p>rem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                </div>
            </div>
            <div>
                <img src="assets/images/partner2.png">
                <div>
                    <p>rem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                </div>
            </div>
            <div>
                <img src="assets/images/partner3.png">
                <div>
                    <p>rem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                
                </div>
            </div>
        </div> 
        <div class="owl-navigation-client">
            <span class="owl-nav-prev-client"><i class="fas fa-chevron-left"></i></span>
            <span class="owl-nav-next-client"><i class="fas fa-chevron-right"></i></span>
        </div>
    </div>     
    


	
<?php
get_footer();
