<?php get_header(); ?>


<div class="recrutement-main">
        <?php the_content();?>
</div>

<div class="offers-container">
    <h1>Offres d'emploi</h1>
    <div class="offers-list">
        <?php 
            $args = array( 'posts' , 'category_name' => 'jobs');                  
            $jobs = new WP_Query( $args );
            while($jobs->have_posts()) : 
                $jobs->the_post();
        ?>
        <div class="offer-content">
           <h2 class="offer-title"><?php the_title();?> </h2>
               
                    <?php the_content(); ?>
                
                <button onClick="popUpForm()">Postuler  <i class="fas fa-long-arrow-alt-right"></i> </button>
            </div>
            <?php endwhile; ?>
        </div>
</div>

<div class="offers-container">
    <h1>Offres de stage</h1>
    <div class="offers-list">
        <?php 
            $args = array( 'posts' , 'category_name' => 'internships');                  
            $internships = new WP_Query( $args );
            while($internships->have_posts()) : 
                $internships->the_post();
        ?>
        <div class="offer-content">
           <h2 class="offer-title"><?php the_title();?> </h2>
               
                    <?php the_content(); ?>
                
                <button onClick="popUpForm()">Postuler  <i class="fas fa-long-arrow-alt-right"></i> </button>
            </div>
            <?php endwhile; ?>
        </div>
</div>

<div id="popup-form" class="popup-form">
        
        <div class="form-content">
            <i class="fa fa-times" id="close"></i>
            <h2>Envoyez-nous votre condidature</h2>
            <?php  echo do_shortcode("[contact-form-7 id=\"165\" title=\"Recruitement pop up form\"]"); ?>
        </div>
</div>

<div class="recrutement-form">
        <img src="assets/images/recrutement-form.jpg">
        <div class="form-content">
            <h1>Vous n'avez pas trouvé l'opportunité que vous cherchez ?</h1>
            <?php  echo do_shortcode("[contact-form-7 id=\"164\" title=\"Recruitement form\"]"); ?>
        </div>
</div>



<?php get_footer(); ?>