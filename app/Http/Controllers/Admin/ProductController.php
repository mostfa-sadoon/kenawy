<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prodect;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products=Prodect::where('parent_id',null)->get();
        return view('admin.product.index',compact('products'));
    }
    public function create($id)
    {
            $parent_id=$id;
            return view('admin.product.create',compact('parent_id'));
    }
    public function edit($id)
    {
        $product=Prodect::find($id);
        return view('admin.product.edit',compact('product'));
    }
    public function store(Request $request)
    { 
        if($request->parent_id>0)
        {
            $product=Prodect::find($request->parent_id);
            if($request->photo)
            {
                $img = $this->MoveImage($request->photo, 'uploads/product');
                Prodect::create([
                    'name'=>$request->name,
                    'img'=>$img,
                    'parent_id'=>$request->parent_id,
                ]);
                return redirect()->route('child_product',$request->parent_id);
            }else{
                Prodect::create([
                    'name'=>$request->name,
                    'parent_id'=>$request->parent_id,
                ]);
                return redirect()->route('child_product',$request->parent_id);
            }
        }else{
            $validated = $request->validate([
                'name' => 'required|unique:materials|max:30',
            ]);
            if($request->photo)
            {
                $img = $this->MoveImage($request->photo, 'uploads/product');
                Prodect::create([
                    'name'=>$request->name,
                    'img'=>$img,
                ]);
                return redirect()->route('product');
            }else{
                Prodect::create([
                    'name'=>$request->name,
                ]);
                return redirect()->route('product');
            } 
        }
     }
    public function update(Request $request)
    {
        $id=$request->id;
        $material=Prodect::find($id);
        $validated = $request->validate([
            'name' =>'required|unique:materials,name,'.$id,
        ]);
        if($request->photo)
        {
            $oldimg=$material->img;
            $img = $this->MoveImage($request->photo, 'uploads/product');
            Prodect::where('id',$id)->update([
                'name'=>$request->name,
                 'img'=>$img,
            ]);
            if($oldimg)
            {
                $image= explode("/",$oldimg);
                $length=count($image)-1;//the name of photo in the last index in array
                unlink("uploads/product/".$image[$length]);
            }
             return redirect()->route('product');
        }else{
            Prodect::where('id',$id)->update([
                'name'=>$request->name,
            ]);
            return redirect()->route('product');
        }
    }
        public function child($id)
        {
            $child_products=Prodect::where('parent_id',$id)->get();
            $product=Prodect::find($id);
            return view('admin.product.child',compact('child_products','product'));
        }
        
        public function destroy($id)
        {
            Prodect::find($id)->delete();
        Prodect::where('parent_id',$id)->delete();
        return redirect()->back();
        }
        public function delete_child($id)
        {
            Prodect::find($id)->delete();
            return redirect()->back();
        }
}
