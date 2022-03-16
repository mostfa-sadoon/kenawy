<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterilController extends Controller
{
    //
    public function index()
    {
        $materials=Material::orderBy('id', 'desc')->where('parent_id',null)->get();
        return view('admin.material.index',compact('materials'));
    }
    public function create($id)
    {
            $parent_id=$id;
            return view('admin.material.create',compact('parent_id'));
    }
    public function edit($id)
    {
        $material=Material::find($id);
        return view('admin.material.edit',compact('material'));
    }
    public function store(Request $request)
    { 
        if($request->parent_id>0)
        {
            $material=Material::find($request->parent_id);
            if($request->material_photo)
            {
                $img = $this->MoveImage($request->material_photo, 'uploads/material');
                Material::create([
                    'name'=>$request->name,
                    // 'type'=>$material->type,
                    'img'=>$img,
                    'parent_id'=>$request->parent_id,
                ]);
                return redirect()->route('child_material',$request->parent_id);
            }else{
                Material::create([
                    'name'=>$request->name,
                    // 'type'=>$material->type,
                    'parent_id'=>$request->parent_id,
                ]);
                return redirect()->route('child_material',$request->parent_id);
            }
        }else{
            $validated = $request->validate([
                'name' => 'required|unique:materials|max:30',
            ]);
            if($request->material_photo)
            {
                $img = $this->MoveImage($request->material_photo, 'uploads/material');
                Material::create([
                    'name'=>$request->name,
                    // 'type'=>$request->type,
                    'description'=>$request->desc,
                    'img'=>$img,
                ]);
                return redirect()->route('material');
            }else{
                Material::create([
                    'name'=>$request->name,
                    // 'type'=>$request->type,
                    'description'=>$request->desc,
                ]);
                return redirect()->route('material');
            } 
        }
     }
    public function update(Request $request)
    {
        $id=$request->id;
        $material=Material::find($id);
        $validated = $request->validate([
            'name' =>'required|unique:materials,name,'.$id,
        ]);
        if($material->parent_id==null)
        {
            $desc=$request->desc;
        }else{
            $desc="";
        }
        if($request->material_photo)
        {
            $oldimg=$material->img;
            $img = $this->MoveImage($request->material_photo, 'uploads/material');
            Material::where('id',$id)->update([
                'name'=>$request->name,
                // 'type'=>$request->kind,
                 'description'=>$desc,
                 'img'=>$img,
            ]);
            Material::where('parent_id',$id)->update([
                // 'type'=>$request->kind,
            ]);
            if($oldimg)
            {
                $image= explode("/",$oldimg);
                $length=count($image)-1;//the name of photo in the last index in array
                unlink("uploads/material/".$image[$length]);
            }
            return redirect()->route('material');
        }else{
            Material::where('id',$id)->update([
                'name'=>$request->name,
                // 'type'=>$request->kind,
                'description'=>$desc,
            ]);
            Material::where('parent_id',$id)->update([
                // 'type'=>$request->kind,
            ]);
            return redirect()->route('material');
        }
    }
    public function child($id)
    {
         $child_materials=Material::where('parent_id',$id)->get();
         $material=Material::find($id);
         return view('admin.material.child',compact('child_materials','material'));
    }
    
    public function destroy($id)
    {
        $material= Material::find($id);
        if(!empty($material->img))
        {
         $image= explode("/",$material->img);
         $length=count($image)-1;//the name of photo in the last index in array
            if($image[$length] != "defaultmarble.jpg"){
                unlink("uploads/material/".$image[$length]);
            }
        }
        $material->delete();
        $materials=Material::where('parent_id',$id)->get();
        foreach($materials as $material)
        {
            if($material->img)
            {
             $image= explode("/",$material->img);
             $length=count($image)-1;//the name of photo in the last index in array
             if($image[$length] != "defaultmarble.jpg"){
                unlink("uploads/material/".$image[$length]);
             }
            }
            $materials=Material::where('parent_id',$material->id)->get();
            foreach($materials as $material)
            {
                if($material->img)
                {
                    $image= explode("/",$material->img);
                    $length=count($image)-1;//the name of photo in the last index in array
                    if($image[$length] != "defaultmarble.jpg"){
                        unlink("uploads/material/".$image[$length]);
                    }
                }
                Material::where('parent_id',$material->id)->delete();
            }
        }
        Material::where('parent_id',$id)->delete();
       return redirect()->back();
    }
    public function delete_child($id)
    {
        $material= Material::find($id);
        if($material->img)
            {
             $image= explode("/",$material->img);
             $length=count($image)-1;//the name of photo in the last index in array
                if($image[$length] != "defaultmarble.jpg"){
                    unlink("uploads/material/".$image[$length]);
                }
            }
            $material->delete();
            $materials=Material::where('parent_id',$id)->get();
            foreach($materials as $material)
            {
                if($material->img)
                {
                $image= explode("/",$material->img);
                $length=count($image)-1;//the name of photo in the last index in array
                    if($image[$length] != "defaultmarble.jpg"){
                        unlink("uploads/material/".$image[$length]);
                    }
                }
            }
            Material::where('parent_id',$id)->delete();
            return redirect()->back();
    }
}
