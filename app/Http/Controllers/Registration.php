<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;
use Session;
use Redirect;
use Hash;
use Auth;
use View;
//use User;
use DB;

class Registration extends Controller
{
	public function addUser(Request $request){

    $in = $request->all();
   // $a=$request->input('password');
   // return $a;
    $v = Validator::make($in, User::$rules);

		if($v->fails()){
			//Session::flash('error', $v->messages());
			return Redirect::to('signin')->withErrors($v->messages());
			//return 'false';
		}

		else{

			if($request->input('password') == $request->input('re_password')){
			    $userObj = new User;
               // return "pass";

				//$userObj->user_name = $in['user_name'];
				$userObj->email=$request->input('email');
		
				$userObj->firstname=$request->input('firstname');
				$userObj->lastname=$request->input('lastname');
				$userObj->password = Hash::make($request->input('password'));
				
				//$userObj->contact = $in['contact'];
				//$userObj->district = $in['district'];
				//$userObj->check_user = 'no';
				//$data = array('email' =>$email);
			     $userObj->save();

			     
				//DB::table('users')->insert($data);

				return Redirect::to('signin');

			}

			else
				return 'password not matched';
		}			
	}
	public function logIn(Request $request){

		$in = $request->all();

		$userdata = array('email'=>$request->input('username'), 'password'=>$request->input('password'));

		//return $userdata;
		if(Auth::attempt($userdata,true)){
			return View:: make('digitaleducation.index');
		}

		else
			return 'Unsuccessful';
		}

		public function logOut(){
		Auth::logout();
		return View::make('signin');
	}

}