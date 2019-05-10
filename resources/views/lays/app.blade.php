<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Orstyle - Fashion With Value</title>

    <!-- Styles -->
    <link href="{{asset('css/page.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"crossorigin="anonymous">

    <!-- Favicons -->

    <link rel="apple-touch-icon" href="{{asset('image/apple-touch-icon.png')}}">
    <link rel="icon" href="{{asset('image/logoo.ico')}}">
  </head>

  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
      <div class="container">

      <div class="navbar-left">
          <button class="navbar-toggler" type="button">&#9776;</button>
          <a class="navbar-brand" href="{{url('/')}}">
            <img class="logo-dark" src="{{asset('image/logoWeb.png')}}" alt="logo">
            <img class="logo-light" src="{{asset('image/logoWeb.png')}}" alt="logo">
          </a>
        </div>

        <section class="navbar-mobile">
          <span class="navbar-divider d-mobile-none"></span>

          <ul class="nav nav-navbar">
            <li class="nav-item">
              <a class="nav-link " href="{{route('welcome')}}">Beranda <span></span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('galeri')}}">Galeri Foto<span></span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Tentang Kita <span></span></a>
              
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/contact">Kontak<span></span></a>
            </li>

            <!-- <li class="nav-item nav-mega">
              <a class="nav-link" href="{{route('iklan')}}">Some Bussiness? <span></span></a>
            </li> -->
          </ul>
        </section>

      

      </div>
    </nav><!-- /.navbar -->


    <!-- Header -->
    <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, #808080 12%, #9f6060 48%, #996666 100%);">
      <div class="container">

        <div class="row">
          <div class="col-md-8 mx-auto">

            <h1 style="color:#ffe6e6">Fashion With Value</h1>
            <p style="color:#ffe6e6"class="lead-2 opacity-90 mt-6">Bergayalah dengan pintar yakni dengan membaca</p>

          </div>
        </div>

      </div>      
    </header><!-- /.header -->


    <!-- Main Content -->
    <main class="main-content"  style="background-color:#998066">
            @yield('content')
            
    </main>


    <!-- Footer -->
    <footer class="footer" style="background-image: linear-gradient(-225deg, #808080 12%, #9f6060 48%, #996666 100%);">
      <div class="container">
             
        <div class="row gap-y align-items-center">

          <div class="col-6 col-lg-3">
            <a href="{{url('/')}}"><img src="{{asset('image/banner.png')}}" alt="logo"></a>
          </div>

          <div class="col-6 col-lg-3 text-right order-lg-last">
            <div class="social">
              <a class="social-facebook" href="https://www.facebook.com/thethemeio"><i class="fab fa-facebook-square"></i></a>
              <a class="social-twitter" href="https://twitter.com/thethemeio"><i class="fab fa-twitter-square"></i></a>
              <a class="social-instagram" href="https://www.instagram.com/thethemeio/"><i class="fab fa-linkedin-square"></i></a>
              <a class="social-dribbble" href="https://dribbble.com/thethemeio"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="nav nav-bold nav-uppercase nav-trim justify-content-lg-center">
              <p>Orstyle.id - Fashion With Value</p>
            </div>
          </div>
         

        </div>
      </div>
    </footer><!-- /.footer -->


    <!-- Scripts -->
    <script src="{{asset('js/page.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script async src="https://static.addtoany.com/menu/page.js"></script>

  </body>
</html>
