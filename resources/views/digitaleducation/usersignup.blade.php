
@extends('digitaleducation.master')
@section('body')

<header id="head" class="secondary">
    <div class="container">
        <h1>Sign in here</h1>
    </div>
</header>

<style type="text/css">
    
    .error{
        color: red;
    }
</style>


    <div class="container">    
        
        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>                            
                        </div>  
                        <div class="panel-body" style="margin-top:10px" >

                            <form id="signupform" class="form-horizontal" role="form" method="post" action="usersignup">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>                                 
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                        <label class="error">{{$errors->first('email')}}</label>
                                    </div>
                                    
                                </div>
                                
                                    
                                <div class="form-group">
                                    <label for="username" class="col-md-3 control-label">User Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="username" placeholder="User Name">
                                        <label class="error">{{$errors->first('username')}}</label>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="usertype" class="col-md-3 control-label">User Type</label>
                                    <div class="col-md-9">
                                          <input type="radio" name="usertype" value="1" checked> Student
                                          <input type="radio" name="usertype" value="2"> Teacher
                                          <label class="error">{{$errors->first('usertype')}}</label>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                        <label class="error">{{$errors->first('password')}}</label>
                                    </div>
                                    
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Re-enter password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="re_password" placeholder="Re-enter password">
                                        <label>{{$errors->first('re_password')}}</label>
                                    </div>
                                       
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                        <span style="margin-left:8px;">or</span>  
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                    </div>                                           
                                        
                                </div>
                                
                                
                                
                            </form>
                         </div>
                    </div>                              
         </div> 
    </div>   
    @endsection