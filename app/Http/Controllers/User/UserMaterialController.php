<?php

namespace App\Http\Controllers\User;


use App\Models\Material;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class  UserMaterialController extends Controller
{
    //
    public function index()
    {
        $materials=Material::where('parent_id',null)->orderBy('id', 'asc')->get();
        return view('Interface.material',compact('materials'));
    }
    public function getmaterial($id)
    {
       
        $materials=Material::where('parent_id',$id)->orderBy('id', 'desc')->get();
        $material=Material::find($id);
        return view('Interface.show_material',compact('materials','material'));
    }
    public function show_img($id)
    {
        $material=Material::find($id);
        $image= explode("/",$material->img);
        $length=count($image)-1;//the name of photo in the last index in array
        $files=storage::disk('public_uploads')->getDriver()->getAdapter()->applypathprefix($image[$length]);
        return response()->file($files);
    }
}
