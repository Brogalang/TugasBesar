<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>JUST INFO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/creative.min.css" rel="stylesheet">
        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
          <div class="container">
            @if (Route::has('login'))
            @auth
            <a class="navbar-brand js-scroll-trigger" href="{{ url('/posts') }}">Beranda</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            @else
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Login</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Register</a>
                </li>
                @endif
                @endauth
              </ul>
            </div>
            @endif
          </div>
        </nav>

            <header class="masthead text-center text-white d-flex">
              <div class="container my-auto">
                <div class="row">
                  <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase">
                      <strong>Just Info</strong>
                    </h1>
                    <hr>
                  </div>
                  <div class="col-lg-8 mx-auto">
                    <p class="text-faded mb-5">Temukan orang yang dapat menyelasaikan masalah mu disini!</p>
                  </div>
                </div>
              </div>
            </header>
        </div>
    </body>
</html>