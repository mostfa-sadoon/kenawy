<?php

namespace App\Http\Controllers\Admin;

use App\Models\home;    
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //
    public function index()
    {
         $sections=Home::orderBy('id', 'ASC')->get();
         $last = Home::latest('id')->first();
        return view('admin.home.index',compact('sections','last'));
    }
    public function creat()
    {
        return view('admin.home.create');
    }
    public function store(Request $request)
    {
        if($request->photo)
        { 
            $img = $this->MoveImage($request->photo, 'uploads/home');
            Home::create([
                'name'=>$request->name,
                'desc'=>$request->desc,
                'img'=>$img,
            ]);       
        }else{
            Home::create([
                'name'=>$request->name,
                'desc'=>$request->desc,
            ]);        
        }
         return redirect()->route('home');
    }
    public function edit($id)
    {
        $section=Home::find($id);
        return view('admin.home.edit',compact('section'));
    }
    public function update(Request $request)
    {
        $id=$request->id;
        $section=Home::find($id);
        if($request->photo)
        { 
            $oldimg=$section->img;
            $img = $this->MoveImage($request->photo, 'uploads/home');
            Home::where('id',$id)->update([
                'name'=>$request->name,
                'desc'=>$request->desc,
                'img'=>$img,
            ]);
            if($oldimg)
            {
                $image= explode("/",$oldimg);
                $length=count($image)-1;//the name of photo in the last index in array
                unlink("uploads/home/".$image[$length]);
            }  
            }else{
                Home::where('id',$id)->update([
                    'name'=>$request->name,
                    'desc'=>$request->desc,
                ]);
            }
         return redirect()->route('home');
    }
    public function destroy($id)
    {
        Home::find($id)->delete();
        return redirect()->back();
    }
    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
}
