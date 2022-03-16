<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="{{asset('interface/css/aboutus.css')}}" rel="stylesheet">
    <title>material</title>
  </head>
  <body>
      <!-- Start nav -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="col-md-4"> <a class="navbar-brand" href="#"><img src="{{asset('home/_Group_.png')}}" style="width: 120px; height: 65px;"></a></div>  
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0  mx-5">
                 <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{route('home_interface')}}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-light" href="{{route('about_interface')}}">about</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{route('conect_us')}}">conect us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{route('material_interface')}}">material</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link" href="{{route('product_interface')}}">product</a>
                      </li> -->
              </ul>
          </div>
        </div>
      </nav>
    <!-- end nav --> 
        
    <div class="text-center">
       <h2 style="color:white">material</h2>
    </div>
        <!-- start content -->
            <div class="container" style="margin-top: 80px;">
                <div class="row">
                    @foreach($materials as $material)
                    <div class="col-md-3 item member mt-4" style="height: 290px;">
                    <img src="{{$material->img}}" class="img-fluid"class="bg" alt="..." style="min-height: 275px;">
                        <div class="caption">
                          <h2>kenay GROUP</h2>
                          <div style="margin-top: 40px;">
                            <a href="{{route('material_interface_child',$material->id)}}" style="text-decoration: none; font-size: 40px; font-weight: 700; color: cornsilk;">{{$material->name}}</a>
                              <p>{{$material->type}}</p>
                          </div>
                      </div>
                    </div>
                    @endforeach     
                </div>
        <!-- end content -->
   <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="#">sdsolutions.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>