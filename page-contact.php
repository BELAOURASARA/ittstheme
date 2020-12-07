<?php get_header(); ?>

<div class="contact-main">
    <?php the_content();?>
</div>

<div class="contact-info">
        <div class="contact-tool tel">
            <i class="fas fa-phone-square-alt"></i>
            <div class="text">
                <h3 class="tool-name">TELEPHONE</h3>
                <h3 class="tool-info">+213 25 52 45</h3>
            </div>
            
        </div>
        <div class="contact-tool fax">
            <i class="fas fa-fax"></i>
            <div class="text">
                <h3 class="tool-name">FAX</h3>
                <h3 class="tool-info">056464645646</h3>
            </div>
            
        </div>
        <div class="contact-tool mail">
            <i class="fas fa-envelope-open-text"></i>
            <div class="text">
                <h3 class="tool-name">EMAIL</h3>
                <h3 class="tool-info">Contact@ittalents.dz</h3>                
            </div>
        </div>
</div>

<div class="contact-form">
        <form action="#" method="post">
            <h1>CONTACTEZ-NOUS </h1>
            <div class="radio">
                <p>Vous êtes :</p>
                <input type="radio" id="contactChoice1" name="contact" value="Professionel" checked="checked">
                <label for="contactChoice1"  >Professionel</label>

                <input type="radio" id="contactChoice2" name="contact" value="Particulier">
                <label for="contactChoice2">Particulier</label>
            </div>
            <input class="text-input" type="text" name="name" id="name" placeholder="ENTREZ VOTRE NOM"> <br>
            <input class="text-input" type="email" name="email" id="email" placeholder="ENTREZ VOTRE ADRESSE MAIL"> <br>
            <input class="text-input" type="text" name="company" id="company" placeholder="NOM DE LA SOCIÉTÉ"> <br>
            <select name="object" id="object" > 
                <option disabled selected>OBJET DE VOTRE MESSAGE</option>
                <option value="inscription">INSCRIPTION À UNE FORMATION</option>
                <option value="question">QUESTION SUR UNE FORMATION</option>
            </select> <br>
            <textarea name="message" id="message" cols="30" rows="5" placeholder="ENTREZ VOTRE MESSAGE"></textarea> <br>
            <button type="submit">ENVOYER <i class="fas fa-paper-plane"></i></button>
        </form>

        <div class="location">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.636899537927!2d3.087176214879282!3d36.73128077996277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fad502771ccd7%3A0x5d0a98f1bcd27790!2sEcole%20It%20Talents%20School!5e0!3m2!1sen!2sdz!4v1605943973067!5m2!1sen!2sdz" 
                width="100%" 
                height="100%" 
                frameborder="0" 
                style="border:0;" 
                allowfullscreen="" 
                aria-hidden="false" 
                tabindex="0">
            </iframe>
        </div>
    </div>




<?php get_footer(); ?>