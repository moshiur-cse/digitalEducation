<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Models\User;
use App\Http\Models\Organization;
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

class RegistrationController extends Controller
{
	public function addUser(Request $request){

		$in = $request->all();
		$v = Validator::make($in, User::$rules);
		if($v->fails()){
			Session::flash('error', $v->messages());			
			return Redirect::to('usersignup')->withErrors($v->messages());
			return 'false';
		}

		else{

			if($request->input('password') == $request->input('re_password')){
				$userObj = new User;
				$userObj->email=$request->input('email');
				$userObj->usertype=$request->input('usertype');
				$userObj->orgid=1;
				$userObj->username=$request->input('username');
				$userObj->password = Hash::make($request->input('password'));
				$userObj->save();

		$userdata = array('email'=>$request->input('email'), 'password'=>$request->input('password'));
		//return $userdata;
		if(Auth::attempt($userdata,true)){
			return Redirect:: to('index');
		}

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
	public function logOut()
	{
		Auth::logout();
		return View::make('digitaleducation.signin');
	}
	public function profile(Request $request)
	{	
		$id=Auth::User()->id;

		User::where('id', '=' ,$id)->update(array('contactno'=>$request->input('contactno'),'location'=>$request->input('location'),'username'=>$request->input('username'),'email'=>$request->input('email'),'firstname'=>$request->input('firstname'),'lastname'=>$request->input('lastname')));
		
		Session::flash('Success','Information Successfully updated');
        return Redirect::to('profile');
              
		/*return View::make('digitaleducation.profile');*/
	}
	public function addOrganization(Request $request){
		$in = $request->all();
		$v = Validator::make($in, Organization::$rules);
        
		if($v->fails()){
			//Session::flash('error', $v->messages());		
			return Redirect::to('signuporganization')->withErrors($v->messages());
			//return 'false';
		}

		else{

			if($request->input('password') == $request->input('re_password')){
				$userObj = new Organization;
				$userObj->email=$request->input('email');
				$userObj->orgname=$request->input('orgname');
				$userObj->orgshortname=$request->input('orgshortname');
				$userObj->password = Hash::make($request->input('password'));
				$userObj->contactno = $request->input('contactno');
				$userObj->location = $request->input('location');
				$userObj->save();

		$userdata = array('email'=>$request->input('email'), 'password'=>$request->input('password'));
		//return $userdata;
		if(Auth::attempt($userdata,true)){
			return Redirect:: to('index');
		}


			}

			else
				return 'password not matched';
		}			
	}
	
}