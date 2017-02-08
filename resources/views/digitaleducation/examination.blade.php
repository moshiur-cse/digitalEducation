
@extends('digitaleducation.master')
@section('body')

<header id="head" class="secondary">
    <div class="container">
        <h1>Examination</h1>
    </div>
</header>




<div class="container" style=" margin-top:50px">    
    <div class="row" >
        <div id="questionSetId" class="col-md-6 col-sm-8">

            <div class="row" style="margin-bottom: 10px">
              <label for="questionSet" class="control-label" ><h3>List Of Question Sets</h3></label>
              <button id="addNewSetId" class="col-md-offset-1 margin-bottom" >Add New</button>
            </div>
          @foreach($allSetName as $all)
            <div class="row" style="margin-bottom: 10px">
            <label for="questionSet" class="control-label" >{{$all->setName}}</label>
              
              <a href="addQuestion_{{$all->id}}" class="col-md-offset-1 margin-bottom">Set Question</a>
          </div>
           @endforeach

        <div class="row" id="newSet" style="display: none">
            <form id="" class="form-horizontal" role="form" method="post" action="questionset">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" /> 
                <label for="setName" class="col-md-4 control-label">Question Set Name</label>
                <div class="col-md-8" style="margin-bottom: 10px">
                    <input type="text" class="form-control" name="setName" placeholder="Question Set name" >
                </div>

                <label for="date" class="col-md-4 control-label">Date</label>
                <div class="col-md-8" style="margin-bottom: 10px">
                    <input type="text" class="form-control" name="date" placeholder="date" >
                </div>

                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn">Add</button>
                </div>
            </form>
        </div>

    </div>


    <div id="questionId" class="col-md-6 col-sm-8" style="display: none">
        <div class="form-group">
         <label for="question" class="col-md-2 control-label">Question</label>
         <div class="col-md-7">
            <input type="text" class="form-control" name="question" placeholder="Question" >
        </div>
        <button class="col-md-3 btn" >Add</button>
    </div>
    <div class="form-group">
        <label for="question" class="col-md-2 control-label">Option1</label>
        <div class="col-md-7">
            <input type="text" class="form-control" name="question" placeholder="Question" >
        </div>
        
    </div>
    <div class="form-group">
        <label for="question" class="col-md-2 control-label">Option1</label>
        <div class="col-md-7">
            <input type="text" class="form-control" name="question" placeholder="Question" >
        </div>
        
    </div>
    <div class="form-group">
        <label for="question" class="col-md-2 control-label">Option1</label>
        <div class="col-md-7">
            <input type="text" class="form-control" name="question" placeholder="Question" >
        </div>
        
    </div>
    <div class="form-group">
     <label for="question" class="col-md-2 control-label">Option1</label>
     <div class="col-md-7">
        <input type="text" class="form-control" name="question" placeholder="Question" >
    </div>

</div>
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