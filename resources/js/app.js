// require('./bootstrap');



// $(function(){
//     'use strict';
//     // Adjust Slider Height
//     var winH        = $(window).height(),
//         upperH      = $('.upper-bar').innerHeight(),
//         navH        = $('.navbar').innerHeight();
//         $('.slider, .carousel-item').height(winH - (upperH + navH));
        
//     // Featured work shuffle
//     $('.featured-work ul li').on('click',function(){
//         $(this).addClass('active').siblings().removeClass('active');
//         if($(this).data('class') === 'all'){
//             $('.shuffle-images .col-md').css('opacity',1);
//         }else{
//             $('.shuffle-images .col-md').css('opacity','.08');
//             $($(this).data('class')).parent().css('opacity',1);
//         }
//     });
// });
// december 15 

const days = document.getElementById('days');
const hours = document.getElementById('hours');
const minutes = document.getElementById('minutes');
const seconds = document.getElementById('seconds');
const currentYear = new Date().getFullYear();
const newYearTime = new Date(`december 15 ${currentYear } 00:00:00`);

function updateCountdown(){
    const currentTime = new Date();
    const diff = newYearTime - currentTime;
    const d = Math.floor(diff / 1000 / 60 / 60 / 24);
    const h = Math.floor(diff / 1000 / 60 / 60 ) % 24;
    const m = Math.floor(diff / 1000 / 60) % 60;
    const s = Math.floor(diff / 1000 ) % 60;
    days.innerHTML = d;
    hours.innerHTML = h < 10 ? '0' + h : h;
    minutes.innerHTML = m < 10 ? '0' + m : m;
    seconds.innerHTML = s < 10 ? '0' + s : s; 
}

setInterval(updateCountdown,1000);
