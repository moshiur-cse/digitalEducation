<?php

namespace App\Http\models;


use Illuminate\Database\Eloquent\Model;

class Questionset extends Model
{
        public static $rules=['setName'=>'required|min:3|max:20'];
}
