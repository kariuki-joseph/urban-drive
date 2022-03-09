<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>max</span>wheels </a>

    <nav class="navbar">
        <a href="{{url('/')}}" id="home">HOME</a>
        <a href="{{url('/vehicles')}}" id="vehicles">VEHICLES</a>
        <a href="{{url('/services')}}" id="services">SERVICES</a>
        <a href="{{url('/featured')}}" id="featured">FEATURED</a>
        <a href="{{url('/reviews')}}" id="reviews">REVIEWS</a>
        <a href="{{url('/contact')}}" id="contact">CONTACT</a>
    </nav>

    <div id="login-btn">
        <button class="btn">login</button>
        <i class="far fa-user"></i>
    </div>

</header> 
    
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    <form action="">
        <h3>user login</h3>
        <input type="email" placeholder="email" class="box">
        <input type="password" placeholder="password" class="box">
        <p> forget your password <a href="#">click here</a> </p>
        <input type="submit" value="login" class="btn">
        <p>or login with</p>
        <div class="buttons">
            <a href="#" class="btn"> google </a>
            <a href="#" class="btn"> facebook </a>
        </div>
        <p> don't have an account <a href="#">create one</a> </p>
    </form>

</div>