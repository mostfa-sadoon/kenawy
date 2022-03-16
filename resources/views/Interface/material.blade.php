@extends('interfaces.user_temp')
@section('styles')
<link href="{{asset('interface/css/aboutus.css')}}" rel="stylesheet">
@endsection
@section('content')
 <!-- Start Body -->

 <div class="container material-page">
        <div class="section-title mt-5" data-aos="zoom-in" data-aos-delay="200">
            <h2>Material</h2>
        </div>

        <!---Start Stone Types-->
        <div class="stone-types">
            <h4>Stone types</h4>
            <div class="row">
                <div class="col-md-6 mt-3" data-aos="fade-right" data-aos-delay="400">
                    <img src="material/Pic_1.png" alt="" />
                </div>
                <div class=" col-md-6 mt-3" data-aos="fade-right" data-aos-delay="600">
                    <p>When choosing natural stone for a project, we should always remember history to give it more character. We need to consider each block as the result of a million-year transformation which made it a unique picture from our past. The
                        color variation, the appearance of fossils in the stone, the different veining’s are proof of its unicity. As each piece was shaped by nature differently, natural stone is very versatile and it can be used in many different settings,
                        from a Luxury classical look to the most modern and contemporary locations.</p>
                </div>
            </div>
            <div class="row mt-5">
            @foreach($materials as $material)
            <div class="col-md-4 mt-3" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{route('material_interface_child',$material->id)}}">
                        <img src="{{$material->img}}" alt="" />
                    </a>

                    <h4 class="text-center mt-4">{{$material->name}}</h4>
                    <div class=" mt-3">
                        <p> {{$material->description}}</p>
                    </div>
                </div>
            
            @endforeach
             </div>
             </div>
        <!---End Stone Types-->
        <!--Start Implementations-->
        <div class="implementations mt-5">
            <div class="section-title mt-5" data-aos="zoom-in" data-aos-delay="200">
                <h2>Implementations</h2>
            </div>
            <div class="row">
                <div class="col-md-6 mt-3" data-aos="fade-right" data-aos-delay="400">
                    <h4 class=" mt-lg-4">Flooring</h4>
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <img src="material/Pic_9.webp" alt="" />
                        </div>
                        <div class="col-md-6 mt-3">
                            <p> A best-in-class range of Marble and Granite with integrated innovations that improve quality of life and release any interior or exterior ambiance.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-3" data-aos="fade-right" data-aos-delay="600">
                    <h4 class=" mt-4">Celling</h4>
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <img src="material/Pic_10.jpg" alt="" />
                        </div>
                        <div class="col-md-6 mt-3">
                            <p> We help developers and designers create new integrated lighting and interior experiences through innovation.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-3" data-aos="fade-right" data-aos-delay="400">
                    <h4 class=" mt-4">Walling</h4>
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <img src="material/Pic_11.jpg" alt="" />
                        </div>
                        <div class="col-md-6 mt-3">
                            <p> When it comes to walls, we provide a curated range of leading stone products with unrivalled flexibility and an emphasis on a highly efficient cost to quality ratio.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-3" data-aos="fade-right" data-aos-delay="600">
                    <h4 class=" mt-4">LED display</h4>
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <img src="material/Pic_12.jpg" alt="" />
                        </div>
                        <div class="col-md-6 mt-3">
                            <p> Creating immersive experiences with the future of LED display With our core values centered on innovation and delivering lifestyles of the future, we provide a selection of the most cutting-edge commercial and residential LED
                                displays.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!--End Implementations-->
    </div>

    <!-- End Body -->

@endsection
