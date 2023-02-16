
// Hamburger Menu Script

document.addEventListener("DOMContentLoaded", function(){
    var navToggle = document.querySelector('.nav-toggle');
    var openMenu = document.querySelector('.header-nav')
    
    navToggle.addEventListener("click",()=>{
        if (navToggle.firstElementChild.classList.contains("fa-bars")) {
            navToggle.firstElementChild.classList.replace("fa-bars", "fa-times");
        }
        else {
            navToggle.firstElementChild.classList.replace("fa-times", "fa-bars");
        }

        openMenu.classList.toggle("header-nav-active")
    })
});



// Owl Carousel Script

jQuery(document).ready(function() {
    jQuery('.owl-carousel').owlCarousel({
      loop:true,
      dots: true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
    });
  });
  