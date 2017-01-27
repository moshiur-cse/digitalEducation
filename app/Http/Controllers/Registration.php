<?php
//use Input;
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class Registration extends Controller
{
	public function addUser(){

     $in = Request::all();
		$v = Validator::make($in, User::$rules);

		if($v->fails()){
			Session::flash('error', 'Please select and image');
			return Redirect::to('signin')->withErrors($v);
		}

		else{

			if($in['password'] == $in['re_password']){
				$userObj = new User;
				//$userObj->first_name = $in['firstname'];
				//$userObj->last_name = $in['lastname'];
				//$userObj->user_name = $in['user_name'];
				$userObj->email = $in['email'];
				$userObj->password = Hash::make($in['password']);
				//$userObj->contact = $in['contact'];
				//$userObj->district = $in['district'];
				//$userObj->check_user = 'no';
				$userObj->$in['firstname'];
				$userObj->save();

				return Redirect::to('signin');
			}

			else
				return 'password not matched';
		}
	}
}