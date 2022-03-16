<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="{{asset('interface/css/mystyle.css')}}" rel="stylesheet">
    <title>connect us</title>
  </head>
  <body>
       <!-- Start nav -->
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="col-md-4"> <a class="navbar-brand text-light" href="#"><img src="{{asset('home/_Group_.png')}}" style="width: 120px; height: 65px;"></a></div>  
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0  mx-5">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="{{route('home_interface')}}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{route('about_interface')}}">about</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{route('conect_us')}}">conect us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{route('material_interface')}}">material</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link " href="{{route('product_interface')}}">product</a>
                      </li> -->
                    </ul>
                  </div>
                </div>
              </nav>
         <!-- end nav -->
         <!-- start content-->
              <div class="container">
                   <div class="text-center content">
                         <h3>WE INVITE YOU TO VISIT OUR SHOWROOMS</h3>
                   </div>
                   <div class="row">
                       <div class="col-md-4">
                            <img src="{{asset('home/Picture 10.jpg')}}" class="img-fluid">
                       </div>
                       <div class="col-md-5">
                        <form>
                                <div class="text-center" style="color:#beaf90; font-size: 25px; font-weight:bold;"><p>conect us </p></div>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="your name">
                                  </div>
                                  <div class="mb-3  col-md-4">
                                     <input type="password" class="form-control" id="exampleInputPassword1" placeholder="your email">
                                  </div>
                            </div>
                           
                           
                            <div class="mb-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="your message"></textarea>
                              </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                       </div>
                       <div class="col-md-3 connect-us">
                           <div class="row">
                               <div class="col-md-4">
                                  <div class="content-icon">
                                    <div> <a href="#" style="font-size: 25px;"><span><i class="fab fa-facebook-f"></i></span></a></div>  
                                    <div> <a href="#"><i class="fab fa-twitter-square"></i></a> </div>
                                   <div><a href="#" style="color: red;"><i class="fab fa-instagram"></i> </a></div>  
                                   </div>
                               </div>
                               <div class="col-md-8 content-info">
                                   <p><span>email  :</span>kenay@gmail.com</p>
                                   <p><span>phone  :</span>02255652385</p>
                               </div>
                           </div>
                           
                       </div>
                   </div>
                   <div class="row">
                          <div class="col-md-8">

                          </div>  
                          <div class="col-md-4">
                             
                          </div>  
                   </div>
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