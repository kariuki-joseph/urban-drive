<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>URBAN</span>DRIVE </a>

    <nav class="navbar" style="">
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
   <!-- <div id="login-btn">
        <button class="btn">Register</button>
        <i class="far fa-user"></i>
    </div>-->
</header> 
    
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    <form action="">
        <h3>User login</h3>
        <input type="email" placeholder="email" class="box">
        <input type="password" placeholder="password" class="box">
        <input type="submit" value="login" class="btn">
        <p>or login with</p>
        <div class="buttons">
            <a href="#" class="btn"> google </a>
            <a href="#" class="btn"> facebook </a>
        </div>
        <p> forget your password <a href="#">click here</a> </p>
        <p> For admin login <a href="/admin">click here</a> </p>

        <p> don't have an account <a href="#" id="btn-register">create one</a> </p>
    </form>

</div>

<div class="register-form-container">

    <span id="close-register-form" class="fas fa-times"></span>

    <form action="">
        <h3>User Registration</h3>
        <input type="text" name="username" placeholder="name" class="box">
        <input type="tel" name="phone" placeholder="phone" class="box">
        <input type="email" name="email" placeholder="email" class="box">
        <input type="password" name="password" placeholder="password" class="box">
        <input type="submit" value="register" class="btn">
        
        <p> Already have an account? <a href="#">login here</a> </p>
    </form>

</div>