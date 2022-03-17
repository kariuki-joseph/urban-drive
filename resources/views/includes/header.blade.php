<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <link rel="stylesheet" href="/assets/css/fontawesome.all.min.css">
    <!-- bootstrap css -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="/assets/css/style.css">

</head>
<body>
    
<header class="header bg-warning">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>URBAN</span>DRIVE </a>

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

    <form  id="formLogin" action="">
        <h3>User login</h3>
        <input type="email" placeholder="email" class="box">
        <input type="password" placeholder="password" class="box">
        <input type="submit" value="login" class="btn">
       
        <p> For admin login <a href="/admin/login">click here</a> </p>

        <p> don't have an account <a href="#" id="btn-register">create one</a> </p>
    </form>

    <form id="formRegister" action="" class="d-none">
        <h3>User Registration</h3>
        <input type="text" name="username" placeholder="name" class="box">
        <input type="tel" name="phone" placeholder="phone" class="box">
        <input type="email" name="email" placeholder="email" class="box">
        <input type="password" name="password" placeholder="password" class="box">
        <input type="submit" value="register" class="btn">
        
        <p> Already have an account? <a id="btn-login" href="#">login here</a> </p>
    </form>

</div>
