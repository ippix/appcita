<!DOCTYPE html>
<html>

<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="n">
  <meta name="author" content="Daniel Cruz">
  <title>Appcitas | @yield('title')</title>
  <!-- Favicon -->
  <link href="{{ asset('img/brand/favicon.png') }}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('css/argon.css?v=1.0.0') }}" rel="stylesheet">
</head>

<body class="bg-default" >
  <div class="main-content">
    
    <!-- Header -->
    <div class="header bg-gradient-primary py-6 py-lg-7" style=" background: #172b4d !important;">
      
     
    </div>
    <!-- Page content -->
    @yield('content')
  </div>
  <!-- Footer -->
  <footer class="py-5">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2022 <a href="https://www.facebook.com/ippiX/" class="font-weight-bold ml-1" target="_blank">{{ config('app.name') }}</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="" class="nav-link text-white" target="_blank">desarrollado por Daniel Cruz UTPL </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link text-white" target="_blank">Acerca de</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('js/argon.js?v=1.0.0') }}"></script>
</body>

</html>