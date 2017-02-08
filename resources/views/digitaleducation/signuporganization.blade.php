
@extends('digitaleducation.master')
@section('body')

<header id="head" class="secondary">
    <div class="container">
        <h1>Sign in here</h1>
    </div>
</header>




    <div class="container">    
        
        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>                            
                        </div>  
                        <div class="panel-body" style="margin-top:10px" >

                            <form id="signupform" class="form-horizontal" role="form" method="post" action="signuporganization">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>                                 
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <p>{{$errors->first('email')}}</p>
                                    
                                <div class="form-group">
                                    <label for="orgname" class="col-md-3 control-label">Organizatoin Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="orgname" placeholder="Organizatoin Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="orgshortname" class="col-md-3 control-label">Organizatoin Short Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="orgshortname" placeholder="Organizatoin Short Name">
                                    </div>
                                </div>
                                  <p>{{$errors->first('orgshortname')}}</p>
                                <div class="form-group">
                                    <label for="contactno" class="col-md-3 control-label">Contact No</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="contactno" placeholder="Contact No">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="location" class="col-md-3 control-label">Location</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="location" placeholder="Location">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Re-enter password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="re_password" placeholder="Re-enter password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                        
                                    </div>
                                </div>
          
                            </form>
                         </div>
                    </div>                              
         </div> 
    </div>   
    @endsection