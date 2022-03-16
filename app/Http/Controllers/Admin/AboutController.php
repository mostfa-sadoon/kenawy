<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
         $sections=About::orderBy('id', 'asc')->get();
         return view('admin.aboutus.index',compact('sections'));
    }
    public function creat()
    {
        return view('admin.aboutus.create');
    }
    public function store(Request $request)
    {
        if($request->photo)
        { 
            $img = $this->MoveImage($request->photo, 'uploads/about');
            About::create([
                'name'=>$request->name,
                'desc'=>$request->desc,
                'img'=>$img,
            ]);       
        }else{
            About::create([
                'name'=>$request->name,
                'desc'=>$request->desc,
            ]);        
        }
         return redirect()->route('about');
    }
    public function edit($id)
    {
        $section=About::find($id);
        return view('admin.aboutus.edit',compact('section'));
    }
    public function update(Request $request)
    {
        $id=$request->id;
        $section=About::find($id);
        if($request->photo)
        { 
            $oldimg=$section->img;
            $img = $this->MoveImage($request->photo, 'uploads/about');
            About::where('id',$id)->update([
                'name'=>$request->name,
                'desc'=>$request->desc,
                'img'=>$img,
            ]);
            if($oldimg)
            {
                $image= explode("/",$oldimg);
                $length=count($image)-1;//the name of photo in the last index in array
                unlink("uploads/about/".$image[$length]);
            }  
            }else{
                About::where('id',$id)->update([
                    'name'=>$request->name,
                    'desc'=>$request->desc,
                ]);
            }
         return redirect()->route('about');
            }
            public function destroy($id)
            {
                About::find($id)->delete();
                return redirect()->back();
            }
}
