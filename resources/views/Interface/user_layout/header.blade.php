<!Doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" /> 
    <link href="{{asset('interface/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('interface/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('interface/css/mystyle.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('interface/css/font-awesome.min.css')}}">
    
   
    <link href="{{asset('home/_Group_.png')}}" rel="icon">
    <style>
        @font-face {
            font-family: Ezaion;
            src: url(interface/ezarion-cufonfonts/h-Ezarion-Regular.ttf);
        }
        
        * {
            font-family: Ezaion;
        }
    </style>
    @yield('styles')

    <title>Kenawy Stones</title>
</head>
   <body>
  <!-- Start nav -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="col-md-4">
                <a class="navbar-brand text-light" href="index.html">
                    <img src="{{asset('home/_Group_.png')}}" alt="" style="width: 80px;height: 50px;" />
                </a>
            </div>
            <button class="navbar-toggler  my_collaps" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0  mx-5">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home_interface')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('material_interface')}}">material</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('about_interface')}}">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('conect_us')}}">conect us</a>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{route('product_interface')}}">product</a>
                      </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- end nav -->