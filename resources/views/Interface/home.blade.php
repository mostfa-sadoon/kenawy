@extends('interfaces.user_temp')
@section('content')
    <!-- Start Header-slider -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('home/Picture_1.jpeg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('home/Picture_2..jpeg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('home/Picture_3.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('home/Picture_4.jpeg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('home/Picture_5.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('home/Picture_6.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('home/Picture_7.jpg')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <!--Contact Us Button--->
        <section id="hero">
        </section>
        <div class="row welcome-head">
            <div class="col-xl-8" data-aos="zoom-in" data-aos-delay="300">
                <h1>Welcome To Kenawy Stones</h1>
                <p>AK stones has been one of the leading natural stone companies in Egypt since 1987</p>
                <div class="buttons">
                    <button class="hire upper" onclick="location.href='contactus.html'">Contact Us</button>
                </div>
            </div>
        </div>
        <!-- <span class="arrow"><i class="fas fa-chevron-down"></i></span> -->
        <!--Prev Button--->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <!--Next Button--->
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- End Header-slider -->
    <!--Start Body-->
    <div class="container">
        <!-- Start Partener In Success -->
        <section id="partners" class="partners ">
            <div data-aos="zoom-in" data-aos-delay="100">
                <div class="section-title">
                    <h2>Partners</h2>
                </div>
                <div class="partners-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{asset('home/partener/Arab_Bank.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/BMS.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/Carrefour.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/Citibank-logo.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/City_Centre.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/Cleopatra_Hospitals.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/Dar_al_Handasah.jfif')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/ECG.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/EHAF-Consulting-Engineers.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/EMAAR-Misr.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/Export_Development_Bank_Of_Egypt.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/Faisal_Islamic_Bank.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/Hill_International.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/Hilton.jfif')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/Hyde_Park.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/Integrated.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/National_Bank_of_Egypt.jfif')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/National_Bank_of_Kuait.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/Novartis.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/RAYA.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/SECON.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/Siac.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/SODIC.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/Sonesta.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/Steigenberger.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('home/partener/Union_National_Bank.jpg')}}" class="img-fluid" alt=""></div>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
            </div>
        </section>
        <!-- End  Partener In Success -->
        <!-- Start Aticles -->
        <div class="artiles mt-4">
            <div class="mt-4">
                <div class="row mt-4" data-aos="fade-right" data-aos-delay="200">
                    <div class="col-md-6 mt-3">
                        <img src="{{$section1->img}} " class="img-fluid " alt="" />
                    </div>
                    <div class="col-md-6 mt-3">
                        <h4>{{$section1->name}}</h4>
                        <p>{{$section1->desc}}</p>
                    </div>
                </div>
                <div class="row" data-aos="fade-right" data-aos-delay="400">
                    <div class="col-md-6 order-2 order-md-1 mt-3">
                        <h4>{{$section2->name}}</h4>
                        <p>{{$section2->desc}}</p>
                    </div>
                    <div class="col-md-6 order-1 order-md-2 mt-15">
                        <img src="{{$section2->img}}" class="img-fluid " alt="" />
                    </div>
                </div>
                <div class="row" data-aos="fade-up-right" data-aos-delay="400">
                    <div class="col-md-6 mt-3">
                        <img src="{{$section3->img}}" class="img-fluid " alt="" />
                    </div>
                    <div class="col-md-6 mt-3">
                        <h4>{{$section3->name}}</h4>
                        <p>{{$section3->desc}}
                        </p>
                    </div>
                </div>
                <p class="mt-4 mb-4">{{$section4->desc}}</p>
            </div>
        </div>
        <!-- end Aticles -->
    </div>
    <!-- End Body -->
@endsection