
@extends('digitaleducation.master')
@section('body')

<header id="head" class="secondary">
    <div class="container">
        <h1>Add Question</h1>
    </div>
</header>

<div class="container" style=" margin-top:50px">    
    <div class="row" >
<form method="post" action='test'>
<input type="hidden" name="_token" value="{{ csrf_token() }}" /> 
        <div id="questionId" class="col-md-6 col-sm-8">
            <div class="row">
             <label for="question" class="col-md-2 control-label">Question</label>
             <div class="col-md-7">
                <input type="text" class="form-control" name="question" value="{{$setId}}" placeholder="Question" >
            </div>
            <button class="col-md-3 btn" >Add</button>
        </div>
        <div class="row">
            <label for="question" class="col-md-2 control-label">Option1</label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="option[1]" placeholder="Question" >
            </div>

        </div>
        <div class="row">
            <label for="question" class="col-md-2 control-label">Option1</label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="option[2]" placeholder="Question" >
            </div>

        </div>
        <div class="row">
            <label for="question" class="col-md-2 control-label">Option1</label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="option[3]" placeholder="Question" >
            </div>

        </div>
        <div class="row">
         <label for="question" class="col-md-2 control-label">Option1</label>
         <div class="col-md-7">
            <input type="text" class="form-control" name="option[4]" placeholder="Question" >
        </div>

    </div>
              <div class="row">
                <div class="col-md-7 col-md-offset-2">
                    <button type="submit" class="btn">Add</button>
                </div>
                </div>
</form>
</div>  

</div>

</div>   

<script type="text/javascript">
    $(document).ready(function(){                
        $("#addNewSetId").on("click", function(){
          //  alert("Ok");
            $("#newSet").show();
            
        })
    });
</script>
@endsection