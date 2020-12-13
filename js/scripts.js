$(document).ready(function(){
    $header =$('header');
    $menuBtn= $('.menu-btn');
    $itemHasChild= $('.menu-menu-container ul .menu-item-has-children');

    $menuBtn.click(function () {
        $header.toggleClass('collapse');
    })

    $itemHasChild.hover(
        function () {
            $header.addClass("collapse-sub");
          },
          function () {
            $header.removeClass("collapse-sub");
          }
    )
    

    $searchBtn=$('.search-btn');
    $searchBtn.click(function(){
        $header.removeClass('collapse');
        $header.addClass('search-mobile');
    });
    $searchCloseBtn=$('.close-search');
    $searchCloseBtn.click(function(){
        $header.removeClass('search-mobile');
    });

    /*------ Formations Slider -----*/
    $("#formations").owlCarousel({
        loop:false,
        autoplay:true,
        autoplayTimeout:3000,
        dots:false,
        nav:true,
        navText: [$('.owl-navigation .owl-nav-prev'), $('.owl-navigation .owl-nav-next')],
        responsive:{
            320:{
                items:1
            },
            700:{
                items:2
            },
            960:{
                items:3
            }
        }
    });


    /*---- Clients Slider -----*/  
    $("#clients").owlCarousel({
            loop:true,
            autoplay:true,
            autoplayTimeout:3000,
            dots:false,
            nav:true,
            navText: [$('.owl-navigation-client .owl-nav-prev-client'), $('.owl-navigation-client .owl-nav-next-client')],
            responsive:{
                320:{
                    items:1
                },
                700:{
                    items:1
                },
                960:{
                    items:1
                }
            }

    });

   // Add smooth scrolling to all links
   $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
        } // End if
    }); 
    

   
       
    
});

$scrollArrow = document.getElementById("scroll-arrow");
var i=0;
$(window).on("scroll", function() {
    if($(window).scrollTop() > 120) {
        $('header').addClass('on-scroll');
        $scrollArrow.style.display='block';
        var subscribeBtn = document.getElementById("subscribe-btn");
        if(subscribeBtn != null)  subscribeBtn.style.display='initial';
        $itemHasChild.hover(
            function () {
                $header.removeClass('on-scroll');
                $header.addClass("on-scroll-collapse");
              },
              function () {
                $header.removeClass("on-scroll-collapse");
                $('header').addClass('on-scroll');
              }
        )
    } else {
       $('header').removeClass('on-scroll');
       $scrollArrow.style.display='none';
        var subscribeBtn = document.getElementById("subscribe-btn");
        if(subscribeBtn != null) subscribeBtn.style.display='none';
        $itemHasChild.hover(
            function () {
                $header.removeClass('on-scroll');
                $header.addClass("collapse-sub");
              },
              function () {
                $header.removeClass("collapse-sub");
                $('header').addClass('on-scroll');
              }
        )
    }
    
    //Articles animations
   var element = document.getElementById("article1");
   if(element != null) check_if_in_view(element);
   var element2 = document.getElementById("article2");
   if(element2 != null) check_if_in_view(element2);
   var element3 = document.getElementById("article3");
   if(element3 != null) check_if_in_view(element3);

   //Realisation counter 
   //get current window information
    
    var window_height = $(window).height();
    var window_top_position = $(window).scrollTop();
    var window_bottom_position = (window_top_position + window_height);
    
    var realisations = document.getElementById('realisations');
    if(realisations != null){
        var element_top_position = $(realisations).offset().top;

        if(element_top_position <= window_bottom_position){
            
            if(i==0){
               i=1;
               
               $('.count').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 1500,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
               });
            }
        
        }
        else{
            i=0;
        }
    }



 
    
});

function scrollUp() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}


 //check to see if any animation containers are currently in view
 function check_if_in_view(element) {
   
   
    var web_window = $(window);

  //get current window information
  var window_height = web_window.height();
  var window_top_position = web_window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  
    var element_height = $(element).outerHeight();
    var element_top_position = $(element).offset().top;
    var element_bottom_position = (element_top_position + element_height);

   if ((element_top_position <= window_bottom_position)) {
        element.classList.add('in-view');

    } else {
        element.classList.remove('in-view');
    }
 
}


function popUpForm(){
    $popUpForm = document.getElementById("popup-form");
    $popUpForm.style.display='block';
}


$(window).click(function() {
    if(event.target.className==="popup-form") {
        $('#popup-form').hide('speed','linear'); // Now the pop up is hided.
        $('#popup-register-form').hide('speed','linear'); // Now the pop up is hided.
    }
});

$('#close').click(function(e) // You are clicking the close button
{
  $('#popup-form').hide('speed','linear'); // Now the pop up is hided.
});
$('#close').click(function(e) // You are clicking the close button
{
  $('#popup-register-form').hide('speed','linear'); // Now the pop up is hided.
});


function popUpRegisterForm(){
    $popUpRegisterForm = document.getElementById("popup-register-form");
    $popUpRegisterForm.style.display='block';
}
