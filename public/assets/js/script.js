let menu = $('#menu-btn');
let navbar = $('.navbar');

let path = window.location.pathname.substring(1);
if(path == ""){
  $("nav.navbar #home").addClass('active');
}else{
  $(`nav.navbar #${path}`).addClass('active');
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
  $("#formAdminLogin").addClass('d-none');
  $('#formRegister').removeClass('d-none');
})
$('#btn-login').click(()=>{
  $('#formLogin').removeClass('d-none');
  $("#formAdminLogin").addClass('d-none');
  $('#formRegister').addClass('d-none');
})
$('#btn-admin-login').click(()=>{
  $('#formLogin').addClass('d-none');
  $('#formRegister').addClass('d-none');
  $("#formAdminLogin").removeClass('d-none');
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
//handle user login and registration
$("#formLogin").submit((e)=>{
  e.preventDefault();
  let form = new FormData(e.target);
    fetch('/login', {
      method:'POST',
      body: form
    }).then(res=>res.json()).then(({data})=>{
      if(data.status == true){
        //login successful
        $("#loginResp").text(data.message).css('color','green').show()
        setTimeout(()=>$(".login-form-container").removeClass('active') && $("#loginResp").text('') && $(e.target).get(0).reset() && window.location.reload(), 1500);
      }else{
        //invalid login
        $("#loginResp").text(data.message).css('color','red').show();
      }
    }).catch(err=>console.log(err))
})

//user registration
$("#formRegister").submit((e)=>{
  e.preventDefault();
  let form = new FormData(e.target);
    fetch('/register', {
      method:'POST',
      body: form
    }).then(res=>res.json()).then(({data})=>{
      if(data.status == true){
        //registration successful
        $("#registerResp").text(data.message).css('color','green').show()
        setTimeout(()=>$(".login-form-container").removeClass('active') && $("#registerResp").text('') && $(e.target).get(0).reset() && window.location.reload(), 1500);
      }else{
        //error in registration
        $("#registerResp").text(data.message).css('color','red').show();
      }
    }).catch(err=>console.log(err))
})

//admin login
$("#formAdminLogin").submit((e)=>{
  e.preventDefault();
  let form = new FormData(e.target);
    fetch('/admin/login', {
      method:'POST',
      body: form
    }).then(res=>res.json()).then(({data})=>{
      if(data.status == false){
        //error in admin login
        $("#adminLoginResp").text(data.message).css('color','red').show();
      }else{
        //successful login
        $("#adminLoginResp").text(data.message).css('color','green').show()
        setTimeout(()=>{
          $(".login-form-container").removeClass('active')
          $("#adminLoginResp").text('')
          $(e.target).get(0).reset()
          window.location.href=data.redirect_url
        }, 1500);
        
      }
    }).catch(err=>console.log(err))
})

//Admin login in redirected page
$("#formAdminLogin1").submit((e)=>{
  e.preventDefault();
  let form = new FormData(e.target);
      fetch('/admin/login', {
      method:'POST',
      body: form
      }).then(res=>res.json()).then(({data})=>{
      if(data.status == false){
          //error in admin login
          $("#adminLoginResp1").text(data.message).css('color','red').show();
      }else{
          //successful login
          $("#adminLoginResp1").text(data.message).css('color','green').show()
          setTimeout(()=>{
          $(".login-form-container").removeClass('active')
          $("#adminLoginResp1").text('')
          $(e.target).get(0).reset()
          window.location.href=data.redirect_url
          }, 1500);
          
      }
      }).catch(err=>console.log(err))
  })
//Review form submission
$("#reviewForm").submit((e)=>{
  e.preventDefault();
  let form = new FormData(e.target);
    fetch('/reviews', {
      method:'POST',
      body: form
    }).then(res=>res.json()).then(({data})=>{
      if(data.status == true){
        //review submitted successfull
        $("#reviewResp").text(data.message).css('color','green').show()
        setTimeout(()=>$("#myModal1").modal('hide') && $("#reviewResp").text('') && $(e.target).get(0).reset(), 3000);
      }else{
        //error in submitting request
        $("#reviewResp").text(data.message).css('color','red').show();
      }
    }).catch(err=>console.log(err))
})

//Contact Form submission
$("#formContact").submit(function(e){
  e.preventDefault();
  let form = new FormData(e.target);
  // [...form.entries()].forEach(([key, val])=>{
    //loop here through all form entries
  // });
    fetch('/contact', {
      method:'POST',
      body: form
    }).then(res=>res.json()).then(({data})=>{
      if(data.status == true){
        //message sent successfully
        $("#contactResp").text(data.message).css('color','green').show()
        setTimeout(()=>$("#contactResp").text('') && $(e.target).get(0).reset(), 5000);
      }else{
        //error in submitting message
        $("#contactResp").text(data.message).css('color','red').show();
      }
    }).catch(err=>console.log(err))
})

//view more car info
function viewCarInfo(info){
  //fill modal with this cat information
 const car = JSON.parse(info);
  let content = `
  <div class="card">
  <div class="swiper-slide box">
                      
  <img src="/img/${car.images[0].url}" alt="">

  <div class="content">
      <h2>
        <div class="price"> <span  class="text-warning">CAR MODEL : </span>${car.model}</div>
        <div class="price"> <span class="text-warning" >CAR ID :  </span>${car.id} </div>
        <div class="price"> <span class="text-warning" >TYPE:  </span>${car.type} </div>
        <div class="price"> <span class="text-warning" >NAME:  </span>${car.name} </div>
      </h2>
  </div> 
            
  <h2> 
      <div class="price">
        <span  class="text-warning">price :ksh </span>${car.price}
      </div>
      <p><span class="text-warning">Color:  </span> ${car.color}  </p>

      <h2 class="text-warning text-center">Car Description</h2>
      <p style="font-size:18px" class="text-muted px-3">${car.description}</p>
        
  </h2>                      
</div>
</div>
  `
  $("#myModal").find('.modal-body').html(content);
  $("#myModal").find('.modal-header>h1').text(`About ${car.model}-${car.name}`);
  $("#myModal").modal('show')
}

//view cars on offer
function viewCarOfferInfo(info){
  //fill modal with this cat information
 const offer = JSON.parse(info);
  let content = `
  <div class="card">
  <div class="swiper-slide box">
                      
  <img src="/img/${offer.images[0].url}" alt="">

  <div class="content">
      <h2>
        <div class="price"> <span  class="text-warning">CAR MODEL : </span>${offer.car.model}</div>
        <div class="price"> <span class="text-warning" >CAR ID :  </span>${offer.car.id} </div>
        <div class="price"> <span class="text-warning" >TYPE:  </span>${offer.car.type} </div>
        <div class="price"> <span class="text-warning" >NAME:  </span>${offer.car.name} </div>
      </h2>
  </div> 
            
  <h2> 
      <div class="price">
        <span  class="text-danger" style="text-decoration: line-through;">Old Price :Ksh ${offer.car.price}</span>
      </div>
      <div class="price">
        <span  class="text-success">New Price :Ksh </span>${offer.new_price}
      </div>
      <p><span class="text-warning">Color:  </span> ${offer.car.color}  </p>

      <h2 class="text-warning text-center">Car Description</h2>
      <p style="font-size:18px" class="text-muted px-3">${offer.car.description}</p>
        
  </h2>                      
</div>
</div>
  `
  $("#myModal").find('.modal-body').html(content);
  $("#myModal").find('.modal-header>h1').text(`More about ${offer.car.model}-${offer.car.name}`);
  $("#myModal").modal('show')
}

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
