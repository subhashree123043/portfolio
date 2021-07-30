$('#project_slider').ready(function(){
    $('.owl-carousel').owlCarousel({
      center: true,
      item:3,
      loop:true,
      margin:10,
      autoplay:true,
      // responsiveClass:true,
      responsive:{
          0:{
              items:1
          },
          768:{
              items:2          
          },
          1170:{
              items:3              
          }
      }
    });
  });
//   jQuery(document).ready(function($){
//     "use strict";
//     $('#project_slider').owlCarousel({
//         loop:true,
//         center:true,
//         items:3,
//         margin:200,
//         autoplay:true,
//         dots:true,
//         autoplayTimeout:8500,
//         smartSpeed:450,
//         responsive:{
//             0:{
//                 items:1
//             },
//             768:{
//                 items:2
//             },
//             1170:{
//                 items:3
//             }
//         }

//     })
// })
const body=document.querySelector('body');
const toggle=document.getElementById('toggle');
const home=document.getElementById('home');
const about=document.getElementById('about');
const skill=document.getElementById('skill');
const project=document.getElementById('project');
const contact=document.getElementById('contact');
const foter=document.getElementById('foter');

toggle.onclick = function(){
    toggle.classList.toggle('active');
    home.classList.toggle('active');
    body.classList.toggle('active');
    about.classList.toggle('active');
    skill.classList.toggle('active');
    project.classList.toggle('active');
    contact.classList.toggle('active');
    foter.classList.toggle('active');
}
