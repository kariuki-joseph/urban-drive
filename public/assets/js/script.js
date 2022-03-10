let menu = $('#menu-btn');
let navbar = $('.navbar');

let path = window.location.pathname.substring(1);
if(path == ""){
  $("nav.navbar #home").addClass('active');
}else{
  // $(`nav.navbar #${path}`).addClass('active');
}

menu.click(function(){
  $(menu).toggleClass('fa-times');
  $(navbar).toggleClass('active');
})

$('#login-btn').click(()=>{
  $('.login-form-container').toggleClass('active');
})

$('#close-login-form').click(() =>{
  $('.login-form-container').removeClass('active');
})

$('#btn-register').click(()=>{
  $('#formLogin').addClass('d-none');
  $('#formRegister').removeClass('d-none');
})
$('#btn-login').click(()=>{
  $('#formLogin').removeClass('d-none');
  $('#formRegister').addClass('d-none');
})
$('.home').on('mousemove', (e) =>{

  $('.home-parallax').each(function(){

    let speed = $(this).attr('data-speed');

    let x = (window.innerWidth - e.pageX * speed) / 90;
    let y = (window.innerHeight - e.pageY * speed) / 90;

    $(this).css('transform', `translateX(${y}px) translateY(${x}px)`);

  });

});


$('.home').on('mouseleave',(e) =>{

  $('.home-parallax').each(function(){
    $(this).css('transform',`translateX(0px) translateY(0px)`);
  });

});

var swiper = new Swiper(".vehicles-slider", {
  grabCursor: true,
  centeredSlides: true,  
  spaceBetween: 20,
  loop:true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".featured-slider", {
  grabCursor: true,
  centeredSlides: true,  
  spaceBetween: 20,
  loop:true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".review-slider", {
  grabCursor: true,
  centeredSlides: true,  
  spaceBetween: 20,
  loop:true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
