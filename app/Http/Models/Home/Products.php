<?php

namespace App\Http\Models\Home;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public static function title(){
        return self::all();
    }
}