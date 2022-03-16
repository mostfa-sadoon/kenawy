
@extends('interfaces.user_temp')
@section('styles')
<link href="{{asset('interface/css/aboutus.css')}}" rel="stylesheet">
@endsection
@section('content')
<!-- start Body-->
<div class="container">
        <div class="section-title">
            <h2>Contact Us</h2>
        </div>
        <div class="text-center content">
            <h3>WE INVITE YOU TO VISIT OUR SHOWROOMS</h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="home/Picture_10.jpg" class="img-fluid">
            </div>
            <div class="col-md-5">
                <form>
                    <div class="text-center" style="color:#beaf90; font-size: 25px; font-weight:bold;">
                        <p>conect us </p>
                    </div>
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
                        <p><span>Email  :</span>kenay@gmail.com</p>
                        <p><span>Phone  :</span>02255652385</p>
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
    @endsection
