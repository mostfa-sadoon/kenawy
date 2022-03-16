@extends('interfaces.user_temp')
@section('styles')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS --> 
    <link href="{{asset('interface/css/slider.css')}}" rel="stylesheet">
@endsection
@section('content')

<div class="container">
        <div class="section-title">
            <h2>Material</h2>
        </div>
        <!-- end content -->
        <div class="stone-types">
             <h2>{{$material->name}}</h2>
             <div class="row"> 
             @foreach($materials as $material)
                    @if($material->name)
                     
                        <div class="text-center col-md-3 mt-3">
                            <a href="{{route('material_interface_child',$material->id)}}"> <img src="{{$material->img}}"  style="height: 200px; width:100%"></a>
                            <h4 class="text-center mt-4">{{$material->name}}</h4>
                        </div>

                    @else
                   
                    <div class="col-md-3 item member item-img mt-4" style="height: 290px;">
                    <img src="{{$material->img}}" class="img-fluid" class="bg" alt="..." style="min-height: 275px;">
                    </div>
                    @endif
             @endforeach
            </div>


           
    <!-- start light-box -->
    <div class="lightbox-container d-flex justify-content-center align-items-center">
            <i id="wclose" class="fas fa-window-close fa-2x" style="color:rgb(107, 107, 107)"></i>
            <div class="lightbox-item d-flex justify-content-between align-items-center">
                <!-- <i id="prev" class="fad fa-arrow-square-left fa-2x"></i>
                            <i id="next" class="fad fa-arrow-square-right fa-2x"></i> -->
            </div>
        </div>
    </div>
    <!-- end light-box --> 
        </div>













     
@endsection('content')
