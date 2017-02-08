<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Models\Questionset;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use Session;
use Redirect;
use View;
use User;
use Auth;
use DB;

class QuestionController extends Controller
{
	public function addQuestionSet(Request $request){

		$in = $request->all();
		$v = Validator::make($in, Questionset::$rules);
		if($v->fails()){
			Session::flash('error', $v->messages());			
			return Redirect::to('examination')->withErrors($v->messages());
			return 'false';
		}
		else{
				$userObj = new Questionset;
				$userObj->teacher_id=Auth::User()->id;
				$userObj->setName=$request->input('setName');
				$userObj->date=$request->input('date');


				$userObj->save();		
				return Redirect::to('examination');
		}			
	}

/*	public function logIn(Request $request){

		$in = $request->all();

		$userdata = array('email'=>$request->input('username'), 'password'=>$request->input('password'));

		//return $userdata;
		if(Auth::attempt($userdata,true)){
			return View:: make('digitaleducation.index');
		}

		else
			return 'Unsuccessful';
	}*/

	public function GetAllSet(Request $request)
	{	
		$id=Auth::User()->id;

		$allSet = Questionset::where('teacher_id', '=' ,$id)->get();

		return View::make('digitaleducation.examination')->with('allSetName', $allSet);
              		
	}
	public function AddQuestion($id)
	{
		return View::make('digitaleducation.question')->with('setId', $id);
              		
	}

	public function test(Request $request){
	    $input = $request->all();

	    $option = $input['option'];
	    return count($option);
	}
	
	
}