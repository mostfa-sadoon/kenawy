<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\home;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    //
    public function index()
    {
        $sections=Home::get();
        $section1=Home::get()->where('number',1)->first();
        $section2=Home::get()->where('number',2)->first();
        $section3=Home::get()->where('number',3)->first();
        $section4=Home::get()->where('number',4)->first();
        return view('Interface.home',compact('sections','section1','section2','section3','section4'));
    }
    public function conect()
    {
        return view('Interface.contact_us');
    }
}
