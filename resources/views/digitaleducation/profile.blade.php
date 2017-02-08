
@extends('digitaleducation.master')
@section('body')

<header id="head" class="secondary">
    <div class="container">
        <h1>Profile</h1>
    </div>
</header>




<div class="container">    
   <!--  -->

@if(Session::has('Success'))

   <script type="text/javascript">
     alert("{{Session::get('Success')}}");

 </script>
 @endif
 
 <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">User profile</div>

        </div>  
        <div class="panel-body" style=" margin-top:10px" >
            <form id="signupform" class="form-horizontal" role="form" method="post" action="profile">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div id="signupalert" style="display:none" class="alert alert-danger">
                    <p>Error:</p>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="username" class="col-md-3 control-label">User Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="username" value ="{{Auth::User()->username}}" readonly="readonly">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="email" value ="{{Auth::User()->email}}" readonly="readonly">
                    </div>
                </div>
                <p>{{$errors->first('email')}}</p>

                <div class="form-group">
                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="firstname" value="{{Auth::User()->firstname}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="lastname" value ="{{Auth::User()->lastname}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="contactno" class="col-md-3 control-label">Contact No</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="contactno" value ="{{Auth::User()->contactno}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="location" class="col-md-3 control-label">Location</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="location" value ="{{Auth::User()->location}}">
                    </div>
                </div>



                <div class="form-group">
                    <!-- Button -->                                        
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Update</button>

                    </div>
                </div>

            </form>
        </div>
    </div>                              
</div> 
</div>   
@endsection