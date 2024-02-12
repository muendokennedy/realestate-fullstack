<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Real Estate Portal') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/script.js'])

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The font-awesome CDN  link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
</head>
<body>
  <!-- This is the navigation bar -->
  <header>
    <div class="logo-area">
      <div class="nav-logo"><img src="{{asset('/images/kenyan logo.png')}}" alt="Kenyan logo"></div>
      <div class="nav-title">Kenya real estate system</div>
    </div>
    <nav>
      <a href="{{route('home')}}">Home</a>
      <div class="link-container">
      <a class="drop-down">Land plots <i class="fa-solid fa-caret-down"></i></a>
      <div class="links">
        <a href="{{route('urban')}}">Urban Plots</a>
        <a href="{{route('upcountry')}}">Upcountry Plots</a>
      </div>
      </div>
      <div class="link-container">
      <a class="drop-down">Buildings <i class="fa-solid fa-caret-down"></i></a>
      <div class="links">
        <a href="{{route('apartments')}}">Apartments</a>
        <a href="{{route('houses')}}">Houses</a>
      </div>
      </div>
      <a href="{{route('contact')}}">Contact</a>
    </nav>
  </header>
      <!-- The landing page home page section -->
      {{ $slot }}

     <!-- The footer section -->
     <footer>
      <div class="footer-info-box">
        <div class="link-box">
          <p class="footer-box-title">Main Links</p>
          <a href="{{route('home')}}">Home</a>
          <a href="{{route('urban')}}">Urban Plots</a>
          <a href="{{route('apartments')}}">Residential Apartments</a>
          <a href="{{route('upcountry')}}">Upcountry Plots</a>
          <a href="{{route('houses')}}">Houses</a>
        </div>
        <div class="link-box">
          <p class="footer-box-title">Social media links</p>
          <a href="#">Facebook</a>
          <a href="#">Twitter</a>
          <a href="#">Instagram</a>
          <a href="#">Pinterest</a>
        </div>
        <div class="link-box">
          <p class="footer-box-title">Our offices</p>
          <a href="#">Nairobi</a>
          <a href="#">Mombasa</a>
          <a href="#">Nakuru</a>
          <a href="#">Kisumu</a>
        </div>
        <div class="link-box">
          <p class="footer-box-title">Our mission</p>
          <p>To ensure that fraud surrounding acquisition of real estate properties is reduced</p>
          <hr>
          <div class="social-media-icons">
            <i class="fa-brands fa-square-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-pinterest"></i>
            <i class="fa-brands fa-linkedin"></i>
          </div>
        </div>
      </div>
      <hr>
      <div class="copyright-box">This is the offficial site of <span>Kenya real estate inventory system</span>| kenyarealestate@gmail.com | All Rights Reserved</div>
    </footer>
</body>
</html>

