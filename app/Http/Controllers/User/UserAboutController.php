<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class UserAboutController extends Controller
{
    //
    public function index()
    {
        $sections=About::get();
        return view('Interface.about',compact('sections'));
    }
}
