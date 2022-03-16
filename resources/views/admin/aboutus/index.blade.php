@extends('admin_temp')
@section('add_new')
<a href="{{route('create_about')}}" class="btn btn-light-warning font-weight-bolder btn-sm" >Add New section</a>
@endsection
@section('content')
      <div class="row">
           @foreach($sections as $section)
                <div class="col-md-8 mt-10">
                    <h2>{{$section->name}}</h2>
                    <p>{{$section->desc}}</p>
                        <div class="mt-15">
                            <a href="{{route('edit_about',$section->id)}}" class="btn btn-success">edit</a>
                            <!-- <a href="{{route('delete_about_section',$section->id)}}" class="btn btn-danger ">delete</a> -->
                        </div>
                    </div>
                    <div class="col-md-4  mt-10">
                        <img class="img-fluid" src="{{$section->img}}" style="max-height:400px">
                    </div>
           @endforeach
       

      


      </div>
  
@endsection