<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <title>Bootstrap Example</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
           
            #cont_video{
                background-color: black;
                padding-bottom: 1x;
            }
        
            #myVideo{
               width:100%;
               background-color: url('teste2.jpg');
            }

        </style>
    </head>
<body class="antialiased">
    <!------- NAVBAR-------->
    <nav class="navbar navbar-expand-lg 
        navbar-black bg-black shadow-lg p-3">
  
        <!-- Brand and toggle get grouped for 
            better mobile display -->
        <div class="container">
            <a class="navbar-brand mx-auto">
                <img src="img\teste2.jpg"
                   alt="Forúm da Beleza" />
            </a>
        </div>
  
        <button class="navbar-toggler" type="button"
            data-toggle="collapse" data-target
            ="#bs-example-navbar-collapse-1"
            aria-controls="bs-example-navbar-collapse-1"
            aria-expanded="false" 
            aria-label="Toggle navigation">
              
            <span class="navbar-toggler-icon"></span>
        </button>
  
        <!-- Anything inside of collapse navbar-collapse
            goes into the "hamburger" -->
        <div class="collapse navbar-collapse" 
            id="bs-example-navbar-collapse-1">
              
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth<div class="d-grid gap-2 d-md-block">
                                    <a href="{{ url('/home') }}" class="btn btn-outline-warning btn-sm">Home</a>
                                    </div>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-outline-warning btn-sm">Log in</a>
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-outline-warning btn-sm">Registrar</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </a>
                </li>
            </ul>
        </div>
    </nav>
            <!-------FIM---NAVBAR-------->

            <!------- BACKGROUND-------->
     <div id="cont_video">
         <video autoplay="true" id="myVideo" loop="true" muted="true">
             <source src="https://cdn-production.beautydate.com.br/assets/home_v-7e084df0370f4eec6be7e18aa0c1e4195529d7a74f7ae003d15fde7dd8e4dc2a.mp4" type="video/mp4">
             <source src="https://cdn-production.beautydate.com.br/assets/home_v-66a76a96156e1e26aa5d2e535974e36a7293b54ea888abbd1b6ced78b667eb97.webm" type="video/webm">
          </video>
     </div>
<!--------FIM---BACKGROUND-------->        
</body>
 </html>
