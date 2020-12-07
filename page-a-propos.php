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
</div>


<div class="profiles-container " id="profiles">
        <h2>Nos Profiles</h2>
        <div class="profiles-grid ">
            <div class="item"> 
                 
                <h4>Software Engineers</h4>
                <div class="user-svg-wrapper">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 260 170" enable-background="new 0 0 260 170" xml:space="preserve">
                        <circle id="svg-circle" fill-rule="evenodd" clip-rule="evenodd" fill="#D4DFF8" cx="130" cy="85" r="85"></circle>
                        <g id="des-floor">
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="1" y1="150" x2="6" y2="150"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="254" y1="150" x2="259" y2="150"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="14" y1="150" x2="246" y2="150"></line>
                        </g>
                        <g id="des-camera">
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M224,122h-31		c-1.105,0-2,0.895-2,2v18c0,1.105,0.895,2,2,2h31c1.105,0,2-0.895,2-2v-18C226,122.895,225.105,122,224,122z"></path>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="197" y1="118" x2="201" y2="118"></line>
                            <circle fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" cx="213" cy="133" r="7"></circle>
                            <rect x="196" y="125" fill="#212226" width="1" height="16"></rect>
                        </g>
                        <g id="des-mug">
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M32,117h24v25		c0,1.105-0.895,2-2,2H34c-1.105,0-2-0.895-2-2V117z"></path>
                            <rect x="35" y="120" fill="#212226" width="18" height="1"></rect>
                            <polygon fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="48,105 46,102 		44,105 44,117 48,117 	"></polygon>
                            <polygon fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="52,105 50,102 		48,105 48,117 52,117 	"></polygon>
                            <polyline fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" points="42.567,117 38.731,107.077 35.784,105 		35,108.519 38.278,117 	"></polyline>
                        </g>
                        <g id="des-body">
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M90,88h80		c1.105,0,2,0.895,2,2v52c0,1.105-0.895,2-2,2H90c-1.105,0-2-0.895-2-2V90C88,88.895,88.895,88,90,88z"></path>
                            <circle fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" cx="130" cy="116" r="5"></circle>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M74,136		c-4.418,0-8,3.582-8,8h16C82,139.582,78.418,136,74,136z"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M124,72v5c0,1.657,2.686,3,6,3c3.314,0,6-1.343,6-3		v-5"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M124,77l-19.068,3.178		C101.766,80.706,98.926,82.433,97,85l0,0"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M136,77l19.068,3.178		c3.166,0.528,6.006,2.255,7.932,4.822l0,0"></path>
                            <rect x="93" y="139" fill="#212226" width="74" height="1"></rect>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M110,45		c0-11.046,8.954-20,20-20s20,8.954,20,20c0,14-7,28-20,28S110,59,110,45z"></path>
                        </g>
                        <g id="des-bubble">
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M179,14		c-1.105,0-2,0.895-2,2v35l10-9h30c1.105,0,2-0.895,2-2V16c0-1.105-0.895-2-2-2H179z"></path>
                            <polygon fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="212,21 190,36 		212,36 	"></polygon>
                            <circle fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" cx="188.5" cy="24.5" r="4.5"></circle>
                        </g>
                    </svg>
              </div> <span class="user-card-circle"></span> 

            </div>
    
              <div class="item"> 
                <h4>Designers</h4>
                <div class="user-svg-wrapper">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 260 170" enable-background="new 0 0 260 170" xml:space="preserve">
                        <circle id="svg-circle" fill-rule="evenodd" clip-rule="evenodd" fill="#D4DFF8" cx="130" cy="85" r="85"></circle>
                        <g id="des-floor">
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="1" y1="150" x2="6" y2="150"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="254" y1="150" x2="259" y2="150"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="14" y1="150" x2="246" y2="150"></line>
                        </g>
                        <g id="des-camera">
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M224,122h-31		c-1.105,0-2,0.895-2,2v18c0,1.105,0.895,2,2,2h31c1.105,0,2-0.895,2-2v-18C226,122.895,225.105,122,224,122z"></path>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="197" y1="118" x2="201" y2="118"></line>
                            <circle fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" cx="213" cy="133" r="7"></circle>
                            <rect x="196" y="125" fill="#212226" width="1" height="16"></rect>
                        </g>
                        <g id="des-mug">
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M32,117h24v25		c0,1.105-0.895,2-2,2H34c-1.105,0-2-0.895-2-2V117z"></path>
                            <rect x="35" y="120" fill="#212226" width="18" height="1"></rect>
                            <polygon fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="48,105 46,102 		44,105 44,117 48,117 	"></polygon>
                            <polygon fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="52,105 50,102 		48,105 48,117 52,117 	"></polygon>
                            <polyline fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" points="42.567,117 38.731,107.077 35.784,105 		35,108.519 38.278,117 	"></polyline>
                        </g>
                        <g id="des-body">
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M90,88h80		c1.105,0,2,0.895,2,2v52c0,1.105-0.895,2-2,2H90c-1.105,0-2-0.895-2-2V90C88,88.895,88.895,88,90,88z"></path>
                            <circle fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" cx="130" cy="116" r="5"></circle>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M74,136		c-4.418,0-8,3.582-8,8h16C82,139.582,78.418,136,74,136z"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M124,72v5c0,1.657,2.686,3,6,3c3.314,0,6-1.343,6-3		v-5"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M124,77l-19.068,3.178		C101.766,80.706,98.926,82.433,97,85l0,0"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M136,77l19.068,3.178		c3.166,0.528,6.006,2.255,7.932,4.822l0,0"></path>
                            <rect x="93" y="139" fill="#212226" width="74" height="1"></rect>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M110,45		c0-11.046,8.954-20,20-20s20,8.954,20,20c0,14-7,28-20,28S110,59,110,45z"></path>
                        </g>
                        <g id="des-bubble">
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M179,14		c-1.105,0-2,0.895-2,2v35l10-9h30c1.105,0,2-0.895,2-2V16c0-1.105-0.895-2-2-2H179z"></path>
                            <polygon fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="212,21 190,36 		212,36 	"></polygon>
                            <circle fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" cx="188.5" cy="24.5" r="4.5"></circle>
                        </g>
                    </svg>
              </div> <span class="user-card-circle"></span> 
               
              </div>
    
              <div class="item"> 
                <h4>English Experts</h4>
                <div class="user-svg-wrapper">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 260 170" enable-background="new 0 0 260 170" xml:space="preserve">
                        <circle id="svg-circle" fill-rule="evenodd" clip-rule="evenodd" fill="#fef0de" cx="130" cy="85" r="85"></circle>
                        <g id="dev-floor">
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="1" y1="150" x2="6" y2="150"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="254" y1="150" x2="259" y2="150"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="14" y1="150" x2="246" y2="150"></line>
                        </g>
                        <g id="dev-books">
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M224,135h-35.5		c-2.485,0-4.5,2.015-4.5,4.5l0,0c0,2.485,2.015,4.5,4.5,4.5H224"></path>
                            <rect x="190" y="139" fill="#212226" width="30" height="1"></rect>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M224,117h-35.5		c-2.485,0-4.5,2.015-4.5,4.5l0,0c0,2.485,2.015,4.5,4.5,4.5H224"></path>
                            <rect x="190" y="121" fill="#212226" width="30" height="1"></rect>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M230,126h-35.5		c-2.485,0-4.5,2.015-4.5,4.5l0,0c0,2.485,2.015,4.5,4.5,4.5H230"></path>
                            <rect x="196" y="130" fill="#212226" width="30" height="1"></rect>
                        </g>
                        <g id="dev-body">
                            <g id="laptop_2_">
                                <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M90,88h80			c1.105,0,2,0.895,2,2v52c0,1.105-0.895,2-2,2H90c-1.105,0-2-0.895-2-2V90C88,88.895,88.895,88,90,88z"></path>
                                <circle fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" cx="130" cy="116" r="5"></circle>
                            </g>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M124,72v5c0,1.657,2.686,3,6,3c3.314,0,6-1.343,6-3		v-5"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M124,77l-19.068,3.178		C101.766,80.706,98.926,82.433,97,85l0,0"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M136,77l19.068,3.178		c3.166,0.528,6.006,2.255,7.932,4.822l0,0"></path>
                            <rect x="93" y="139" fill="#212226" width="74" height="1"></rect>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M110,45		c0-11.046,8.954-20,20-20s20,8.954,20,20c0,14-7,28-20,28S110,59,110,45z"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M74,136		c-4.418,0-8,3.582-8,8h16C82,139.582,78.418,136,74,136z"></path>
                        </g>
                        <g id="dev-mug">
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M31,116h24v26		c0,1.105-0.895,2-2,2H33c-1.105,0-2-0.895-2-2V116z"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M27,122h-3		c-1.105,0-2,0.895-2,2v8c0,1.105,0.895,2,2,2h3"></path>
                            <rect x="50" y="119" fill="#212226" width="1" height="20"></rect>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="43" y1="108" x2="43" y2="100"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="37" y1="110" x2="37" y2="106"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="49" y1="110" x2="49" y2="106"></line>
                        </g>
                        <g id="dev-bubble">
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M180,14		c-1.105,0-2,0.895-2,2v35l10-9h30c1.105,0,2-0.895,2-2V16c0-1.105-0.895-2-2-2H180z"></path>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="188" y1="36" x2="192" y2="36"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="188" y1="20" x2="192" y2="20"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="192" y1="24" x2="203" y2="24"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="196" y1="28" x2="208" y2="28"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="192" y1="32" x2="199" y2="32"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="196" y1="20" x2="198" y2="20"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="212" y1="28" x2="214" y2="28"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="203" y1="32" x2="205" y2="32"></line>
                        </g>
                    </svg>
                </div> <span class="user-card-circle"></span> </a>
                
              </div>
    
              <div class="item"> 
                
                <h4>Computer Science Engineers</h4>
                <div class="user-svg-wrapper">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 260 170" enable-background="new 0 0 260 170" xml:space="preserve">
                        <circle id="svg-circle" fill-rule="evenodd" clip-rule="evenodd" fill="#fedee0" cx="130" cy="85" r="85"></circle>
                        <g id="team-floor">
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="1" y1="150" x2="6" y2="150"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="254" y1="150" x2="259" y2="150"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="14" y1="150" x2="246" y2="150"></line>
                        </g>
                        <g id="team-body">
                            <g id="laptop_1_">
                                <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M90,88h80			c1.105,0,2,0.895,2,2v52c0,1.105-0.895,2-2,2H90c-1.105,0-2-0.895-2-2V90C88,88.895,88.895,88,90,88z"></path>
                                <circle fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" cx="130" cy="116" r="5"></circle>
                            </g>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M124,72v5c0,1.657,2.686,3,6,3c3.314,0,6-1.343,6-3		v-5"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M124,77l-19.068,3.178		C101.766,80.706,98.926,82.433,97,85l0,0"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M136,77l19.068,3.178		c3.166,0.528,6.006,2.255,7.932,4.822l0,0"></path>
                            <rect x="93" y="139" fill="#212226" width="74" height="1"></rect>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M110,45		c0-11.046,8.954-20,20-20s20,8.954,20,20c0,14-7,28-20,28S110,59,110,45z"></path>
                        </g>
                        <g id="team-user-left">
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M53,89v5c0,1.657,2.686,3,6,3s6-1.343,6-3v-5"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M53,94l-19.816,4.783		C27.796,100.084,24,104.905,24,110.448V115v23c0,3.314,2.686,6,6,6h29"></path>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" x1="65" y1="94" x2="84.068" y2="97.178"></line>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M39,62		c0-11.046,8.954-20,20-20s20,8.954,20,20c0,14-7,28-20,28S39,76,39,62z"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M74,136		c-4.418,0-8,3.582-8,8h16C82,139.582,78.418,136,74,136z"></path>
                        </g>
                        <g id="team-user-right">
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M207,89v5c0,1.657-2.686,3-6,3s-6-1.343-6-3v-5"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M207,94l19.816,4.783		c5.388,1.301,9.184,6.122,9.184,11.665V115v23c0,3.314-2.686,6-6,6h-29"></path>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" x1="195" y1="94" x2="175.932" y2="97.178"></line>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M221,62		c0-11.046-8.954-20-20-20s-20,8.954-20,20c0,14,7,28,20,28S221,76,221,62z"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M186,136		c4.418,0,8,3.582,8,8h-16C178,139.582,181.582,136,186,136z"></path>
                        </g>
                    </svg>
                </div> <span class="user-card-circle"></span> </a>
              </div>
    
              <div class="item"> 
                 
                <h4>Business Managers </h4>
                <div class="user-svg-wrapper">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 260 170" enable-background="new 0 0 260 170" xml:space="preserve">
                        <circle id="svg-circle" fill-rule="evenodd" clip-rule="evenodd" fill="#fef0de" cx="130" cy="85" r="85"></circle>
                        <g id="dev-floor">
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="1" y1="150" x2="6" y2="150"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="254" y1="150" x2="259" y2="150"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="14" y1="150" x2="246" y2="150"></line>
                        </g>
                        <g id="dev-books">
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M224,135h-35.5		c-2.485,0-4.5,2.015-4.5,4.5l0,0c0,2.485,2.015,4.5,4.5,4.5H224"></path>
                            <rect x="190" y="139" fill="#212226" width="30" height="1"></rect>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M224,117h-35.5		c-2.485,0-4.5,2.015-4.5,4.5l0,0c0,2.485,2.015,4.5,4.5,4.5H224"></path>
                            <rect x="190" y="121" fill="#212226" width="30" height="1"></rect>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M230,126h-35.5		c-2.485,0-4.5,2.015-4.5,4.5l0,0c0,2.485,2.015,4.5,4.5,4.5H230"></path>
                            <rect x="196" y="130" fill="#212226" width="30" height="1"></rect>
                        </g>
                        <g id="dev-body">
                            <g id="laptop_2_">
                                <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M90,88h80			c1.105,0,2,0.895,2,2v52c0,1.105-0.895,2-2,2H90c-1.105,0-2-0.895-2-2V90C88,88.895,88.895,88,90,88z"></path>
                                <circle fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" cx="130" cy="116" r="5"></circle>
                            </g>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M124,72v5c0,1.657,2.686,3,6,3c3.314,0,6-1.343,6-3		v-5"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M124,77l-19.068,3.178		C101.766,80.706,98.926,82.433,97,85l0,0"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-miterlimit="10" d="M136,77l19.068,3.178		c3.166,0.528,6.006,2.255,7.932,4.822l0,0"></path>
                            <rect x="93" y="139" fill="#212226" width="74" height="1"></rect>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M110,45		c0-11.046,8.954-20,20-20s20,8.954,20,20c0,14-7,28-20,28S110,59,110,45z"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M74,136		c-4.418,0-8,3.582-8,8h16C82,139.582,78.418,136,74,136z"></path>
                        </g>
                        <g id="dev-mug">
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M31,116h24v26		c0,1.105-0.895,2-2,2H33c-1.105,0-2-0.895-2-2V116z"></path>
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M27,122h-3		c-1.105,0-2,0.895-2,2v8c0,1.105,0.895,2,2,2h3"></path>
                            <rect x="50" y="119" fill="#212226" width="1" height="20"></rect>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="43" y1="108" x2="43" y2="100"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="37" y1="110" x2="37" y2="106"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="49" y1="110" x2="49" y2="106"></line>
                        </g>
                        <g id="dev-bubble">
                            <path fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M180,14		c-1.105,0-2,0.895-2,2v35l10-9h30c1.105,0,2-0.895,2-2V16c0-1.105-0.895-2-2-2H180z"></path>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="188" y1="36" x2="192" y2="36"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="188" y1="20" x2="192" y2="20"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="192" y1="24" x2="203" y2="24"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="196" y1="28" x2="208" y2="28"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="192" y1="32" x2="199" y2="32"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="196" y1="20" x2="198" y2="20"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="212" y1="28" x2="214" y2="28"></line>
                            <line fill="none" stroke="#212226" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="203" y1="32" x2="205" y2="32"></line>
                        </g>
                    </svg>
                </div> <span class="user-card-circle"></span> </a>
              </div>

        </div>

        
        <button  type="submit" onclick="document.location='recrutement.html'">Rejoignez notre team !  <i class="fas fa-long-arrow-alt-right"></i> </button>
      


         
</div>

<div class="realisation-container" id="realisations">

    <h2> Nos Réalisations depuis 2014 </h2>
    <div class="row">
        <div class="column">
        <div class="card">
            <i class="fa fa-handshake"></i>
            <h3><span id="Partners" class="count">30</span></h3>
            <p>Partenaires</p>
            
        </div>
        </div>
    
        <div class="column">
        <div class="card"> 
            <i class="fa fa-graduation-cap"></i>
            <h3><span id="Formations" class="count">200</span>+</h3>
            <p>Formations Certifiées</p>
        </div>
        </div>
        
        <div class="column">
        <div class="card">
            <i class="fa fa-laugh-beam"></i>   
            <h3><span id="Clients" class="count">500</span>+</h3>
            <p>Clients Satisfaits</p>
        </div>
        </div>
    </div>

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

<div class="local-container" id="local">
        <h2>Notre Local</h2>

            <div class="content-item">
                <div class="item description">
                    <h3><i class="fa fa-graduation-cap"></i> Salle des conférences</h3>
                    <p>
                        Une salle de conférence bien équipée pour organiser des formations et des ateliers. Sa configuration flexible de sièges le transformera sans effort d'un théâtre classique en ateliers orientés groupe
                    </p>
                </div>
                <div class="item image">
                    <img src="assets/images/local.jpg" alt="">
                </div>
                <div class="item properties">
                    
                    <h4>Caractéristiques</h4>
                    <ul>
                        <li><i class="fa fa-check"></i> Effectif : 5 salles</li>
                        <li><i class="fa fa-check"></i> 20 à 25 personnes </li>
                        <li><i class="fa fa-check"></i> Wifi</li>
                        <li><i class="fa fa-check"></i> Grand panneau de projection</li>
                        <li><i class="fa fa-check"></i> Tableau blanc</li>
                    </ul>
                </div>
    
            </div>
            
            <div class="content-item">
                <div class="item description">
                    <h3><i class="fa fa-chalkboard-teacher"></i>  Salle des workshops</h3>
                    <p>
                        Un espace pour organiser des ateliers et des formations en petits groupes. Equipé d'une grande planche. La configuration des sièges est flexible et peut passer d'un modèle de théâtre à un modèle d'ateliers en petits groupes</p>
                </div>
                <div  class="item image">
                    <img src="assets/images/local.jpg" alt="">
                </div>
                <div class="item properties">
                    <h4>Caractéristiques</h4>
                    <ul>
                        <li><i class="fa fa-check"></i> Effectif : 8 salles</li>
                        <li><i class="fa fa-check"></i> 10 à 15 personnes </li>
                        <li><i class="fa fa-check"></i> Wifi</li>
                        <li><i class="fa fa-check"></i> Tableau blanc</li>
                    </ul>
                </div>
    
            </div>

            <div class="content-item">
                <div class="item description">
                    <h3><i class="fa fa-laptop"></i> Salle des machines</h3>
                    <p>
                        Un espace pour organiser des ateliers et des formations en petits groupes. Equipé d'une grande planche. La configuration des sièges est flexible et peut passer d'un modèle de théâtre à un modèle d'ateliers en petits groupes</p>
                </div>
                <div  class="item image">
                    <img src="assets/images/local.jpg" alt="">
                </div>
                <div class="item properties">
                    
                    <h4>Caractéristiques</h4>
                    <ul>
                        <li><i class="fa fa-check"></i> Effectif : 5 salles</li>
                        <li><i class="fa fa-check"></i> 10 à 15 personnes </li>
                        <li><i class="fa fa-check"></i> Wifi</li>
                        <li><i class="fa fa-check"></i> Machines puissantes</li>
                    </ul>
                </div>
            </div>
            
            
          
</div> 




<?php get_footer(); ?>