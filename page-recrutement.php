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
            <form action="#" method="post">
                <div class="input-field">
                    <input type="text" name="lastname" id="name" value="" onchange="this.setAttribute('value', this.value);" required/> <br>
                    <label for="name">Nom complet :</label>
                </div>
                

                <div class="input-field">      
                    <input type="email" name="email" id="email" value="" onchange="this.setAttribute('value', this.value);" required/> 
                    <label for="email">Adresse Mail :</label>
                </div>
                
                <label class="custom-file-upload">
                    <input type="file" name="resume" id="resume" required/>
                    JOINDRE VOTRE CV
                </label><br>
                <div class="button">
                    <button type="submit">Envoyer <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
               
                  
                
            </form>
        </div>
</div>

<div class="recrutement-form">
        <img src="assets/images/recrutement-form.jpg" >
        <div class="form-content">
            <h1>Vous n'avez pas trouvé l'opportunité que vous cherchez ?</h1>
            <form action="#" method="post">
                <h2>Envoyez-nous votre demande </h2>
                <div class="input-field">
                    <input type="text" name="lastname" id="name1" value="" onchange="this.setAttribute('value', this.value);" required/> <br>
                    <label for="name1">Nom complet :</label>
                </div>

                <div class="input-field">      
                    <input type="email" name="email" id="email1" value="" onchange="this.setAttribute('value', this.value);" required/> 
                    <label for="email1">Adresse Mail :</label>
                </div>

                <div class="input-field">      
                    <input type="text" name="job" id="job" value="" onchange="this.setAttribute('value', this.value);" required/> 
                    <label for="job">L'opportunité cherchée :</label>
                </div>
    
                 
                <div class="textarea-field">      
                    <textarea name="message" id="message" cols="30" rows="5" value="" onchange="this.setAttribute('value', this.value);"></textarea>
                    <label for="message">Message:</label>
                </div>
                
                <div class="button">
                    <button type="submit">Envoyer <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
               
                  
                
            </form>
        </div>
</div>



<?php get_footer(); ?>