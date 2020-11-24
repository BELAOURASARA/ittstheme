$(document).ready(function(){
    $header =$('header');
    $menuBtn= $('.menu-btn');


    $menuBtn.click(function () {
        $header.toggleClass('collapse');
    })

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
        loop:true,
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
            navText: [$('.owl-navigation .owl-nav-prev'), $('.owl-navigation .owl-nav-next')],
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

    
  
   
       
    
});

$scrollArrow = document.getElementById("scroll-arrow");
$(window).on("scroll", function() {
    if($(window).scrollTop() > 120) {
        $('header').addClass('on-scroll');
        $scrollArrow.style.display='block';
        var subscribeBtn = document.getElementById("subscribe-btn");
        if(subscribeBtn != null)  subscribeBtn.style.display='initial';
    } else {
       $('header').removeClass('on-scroll');
       $scrollArrow.style.display='none';
        var subscribeBtn = document.getElementById("subscribe-btn");
        if(subscribeBtn != null) subscribeBtn.style.display='none';
    }
    

    var element = document.getElementById("article1");
    if(element != null) check_if_in_view(element);
   var element2 = document.getElementById("article2");
   if(element2 != null) check_if_in_view(element2);
   var element3 = document.getElementById("article3");
   if(element3 != null) check_if_in_view(element3);


 
    
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
    }
    if(event.target.className==="popup-register-form") {
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
