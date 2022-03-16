<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $guarded;
    public function getImgAttribute($img)
    {
        if ($img)
        {
            return asset('/uploads/about') . '/' . $img;
        }else{
            return false;
        }
          

    }
}
