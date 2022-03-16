<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $guarded;
    public function getImgAttribute($img)
    {
        if ($img)
        {
            return asset('/uploads/material') . '/' . $img;
        }else{
            return asset('/uploads/default/defaultmarble.jpg');
        }
          

    }
}
