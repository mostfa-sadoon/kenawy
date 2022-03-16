<?php

namespace App\Http\Controllers\User;

use App\Models\Prodect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    //
    public function index()
    {
        $Prodects=Prodect::where('parent_id',null)->orderBy('id', 'desc')->get();
        return view('Interface.product',compact('Prodects'));
    }
    public function getproduct($id)
    {
        $Prodects=Prodect::where('parent_id',$id)->orderBy('id', 'desc')->get();
        return view('Interface.show_product',compact('Prodects'));
    }
}
