<?php get_header(); ?>

<div class="contact-main">
    <?php the_content();?>
</div>

<div class="contact-info">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("contact-1") ) : ?>
	    <?php endif;?>
        
</div>

<div class="contact-form">
        <?php  echo do_shortcode("[contact-form-7 id=\"166\" title=\"Contact form\"]"); ?>
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