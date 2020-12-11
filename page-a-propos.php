<?php get_header(); ?>

<div class="about-main-container">
        <div class="main-content">
            <?php the_content();?>
            <div class="link-boxes">            
                <a href="#description" class ="link-box">
                    <i class="flaticon-group"></i>
                     <p >Qui sommes-nous ?</p>
                </a>

                <a href="#profiles" class ="link-box">
                    <i class="flaticon-skills"></i>
                    <p >Profiles</p>
                </a>
               
                <a href="#realisations" class ="link-box">
                    <i class="flaticon-trophy"></i>
                    <p >Réalisations</p>
                </a>

                <a href="#local" class ="link-box">
                    <i class="flaticon-office"></i>
                    <p >Local</p>
                </a>
            </div>
        </div>
</div>

<div class="about-description-container" id="description">
        <div class="content">
            <?php 
                $post = get_post_by_title('IT Talents description');
                the_content();
            ?>
        </div>

        <div class="content">
            <div class="logo">
                <?php the_post_thumbnail();?>
            </div>


            


            <div class="socials">
                <h4> Suivez-nous </h4>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("socials-1") ) : ?>
                <?php endif;?>
            </div>
        </div>
</div>


<div class="profiles-container " id="profiles">
        <h2>Nos Profiles</h2>
        <div class="profiles-grid ">
             
            <?php
            $params = array( 'limit' => -1 );
            $pods = pods( 'profile', $params );
            if ( $pods->total() > 0 ) {
                while( $pods->fetch() )  {

                    //reset id
                    $pods->id = $pods->id();
                    
                    //get the template
                    $temp = $pods->template( 'profiles template' );
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
            
       
        </div>
        <button  type="submit" onclick="document.location='/ittswp/index.php/recrutement'">Rejoignez notre team !  <i class="fas fa-long-arrow-alt-right"></i> </button>
       
</div>

<div class="realisation-container" id="realisations">

    <h2> Nos Réalisations depuis 2014 </h2>
    <div class="row">
    <?php
            $params = array( 'limit' => -1 );
            $pods = pods( 'realisation', $params );
            if ( $pods->total() > 0 ) {
                while( $pods->fetch() )  {

                    //reset id
                    $pods->id = $pods->id();
                    
                    //get the template
                    $temp = $pods->template( 'realisations template' );
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
    </div>

</div>

<div class="clients-container" >   
        <div class=" owl-carousel owl-theme clients-slider " id="clients"> 
        <?php 
        $args = array( 'posts' , 'category_name' => 'references');                  
        $references = new WP_Query( $args );
        while($references->have_posts()) : 
            $references->the_post();
            
            ?>
          <div>
          <?php the_post_thumbnail();?>
          <div>
          <p> <?php  the_content();?> </p>
          </div>
          </div>
        
        
       <?php endwhile; ?>
        
        </div> 
        <div class="owl-navigation-client">
            <span class="owl-nav-prev-client"><i class="fas fa-chevron-left"></i></span>
            <span class="owl-nav-next-client"><i class="fas fa-chevron-right"></i></span>
        </div>
</div> 

<div class="local-container" id="local">
        <h2>Notre Local</h2>

        <?php
            $params = array( 'limit' => -1 );
            $pods = pods( 'local', $params );
            if ( $pods->total() > 0 ) {
                while( $pods->fetch() )  {

                    //reset id
                    $pods->id = $pods->id();
                    
                    //get the template
                    $temp = $pods->template( 'locals template' );
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

    
            
            
            
          
</div> 




<?php get_footer(); ?>