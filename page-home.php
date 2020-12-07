<?php
/**
 * Template name : home page
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
             <?php the_content();?> 
             
             <button onclick="document.location='http://127.0.0.1/ittswp/index.php/planning/'" class="btn" type="submit">Consulter le Planning   <i class="fas fa-long-arrow-alt-right"></i> </button>
            
        </div>
    </div>

    <div class="formations-container">
       <h1 class="title">Formations Confirmées !</h1>  
       <div class=" owl-carousel owl-theme formations-slider " id="formations">
           
            <?php
            $params = array( 'limit' => -1 );
            $pods = pods( 'formation', $params );
            if ( $pods->total() > 0 ) {
                while( $pods->fetch() )  {

                    //reset id
                    $pods->id = $pods->id();
                    
                    //get the template
                    $temp = $pods->template( 'formations template' );
                    //output template if it exists
                    if ( isset( $temp )  ) {
                        
                        echo $temp;
                    }

                }
                //pagination
                echo $pods->pagination();

            }
            else {
                echo 'No content found.'; }

            ?>

            <div class="formation-content" style="display: flex; justify-content: center; flex-direction: column;" >
               <i class="fas fa-arrow-circle-right" style="font-size: 70px; color: #064ea2; margin: 20px;"></i>
               <a href=""  class="formation-info">
                  <button class="btn">Voir plus </button>
               </a> 
            </div>

       </div>
       <div class="owl-navigation">
           <span class="owl-nav-prev"><i class="fas fa-chevron-left"></i></span>
           <span class="owl-nav-next"><i class="fas fa-chevron-right"></i></span>
       </div>
    </div>

    <div class="articles-container">
       <?php 
        $args = array( 'posts' , 'category_name' => 'articles');                  
        $articles = new WP_Query( $args );
        $i=1;
        while($articles->have_posts()) : 

            $articles->the_post();
            ?>
        <div  class="article-content article<?php echo $i;?>">
            <div class="image">
                <img src="<?php echo get_the_post_thumbnail();?>
            </div>
            <div id="article<?php echo $i;?>" class="content">
                
                    <h2 class="title"><?php echo $title = get_the_title();?></h2>
                     <?php echo $content = get_the_content();?> 
                    <button > En savoir plus <i class="fas fa-long-arrow-alt-right"></i></button>
            </div>

         </div>    
        
                             
       <?php 
            $i++;
            if($i==4)
            {
                $i=1;
            }
            endwhile; ?>
    </div> 

    <div class="clients-container" >   
        <div class=" owl-carousel owl-theme clients-slider " id="clients"> 
        <?php 
        $args = array( 'posts' , 'category_name' => 'references');                  
        $references = new WP_Query( $args );
        while($references->have_posts()) : 
            $references->the_post();
            $img=get_the_post_thumbnail();
            ?>
          <div>
          <img src="<?php echo $img?>
          <div>
          <p> <?php echo $content = get_the_content();?> </p>
          </div>
          </div>
        
        
       <?php endwhile; ?>
        
        </div> 
        <div class="owl-navigation-client">
            <span class="owl-nav-prev-client"><i class="fas fa-chevron-left"></i></span>
            <span class="owl-nav-next-client"><i class="fas fa-chevron-right"></i></span>
        </div>
    </div>     
    


	
<?php
get_footer();
