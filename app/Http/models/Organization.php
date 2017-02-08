<?php

namespace App\Http\models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
	
   //protected $table="organizations";
	    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static $rules=['orgshortname'=>'required|min:3|max:10|unique:organizations','email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6'];

}
