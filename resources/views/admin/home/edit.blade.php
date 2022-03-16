@extends('admin_temp')

@section('content')
   <form action="{{route('update_section_home')}}" method="POST" enctype="multipart/form-data">
       @csrf
       <input type="hidden" name="id" value="{{$section->id}}">   
        <div class="row">
            <div class="col-md-8 mt-10">
                <label for="exampleInputEmail1">title</label>
                <input type="text" class="form-control" value="{{$section->name}}" name="name" placeholder="enter title">
            
                <label for="exampleFormControlTextarea1">description</label>
                <textarea class="form-control" name="desc"  id="exampleFormControlTextarea1" rows="9">{{$section->desc}}</textarea>
            </div>
            <div class="col-md-4  mt-10">
                <div class="col-lg-9 col-xl-6">
                        @if($section->img!=null)
                        <div class="image-input image-input-outline" id="kt_image_1">
                        <div class="image-input-wrapper" style="background-image: url({{$section->img}}); width: 250px; height: 250px;" ></div>
                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                            <i class="fa fa-pen icon-sm text-muted"></i>
                            <input type="file" style="" value="" name="photo"  accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="profile_avatar_remove" />
                        </label>
                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                        </div>
                        <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                        @endif 
            </div>
        </div>
        <input type="submit" name="add" value="add" class="btn btn-success">
    </form>

@endsection
@section('scripts')
        <script>var HOST_URL = "{{asset('https://preview.keenthemes.com/metronic/theme/html/tools/preview')}}";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('assets/js/pages/crud/file-upload/image-input.js')}}"></script>
@endsection