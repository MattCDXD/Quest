
@extends('layouts.app')

@section('content')
<link href="css/main.css" rel="stylesheet" type="text/css">
<body>
<div class="container">
    <div class="row justify-content-center">                                        
        <div class="col-md-8">
            <div class="card">
                <div>
                    <h1>Create New Questionnaire</h1>

                    </div> 

                <div>
                    <form action="/questionnaires" method="post">           
                                                                                
                        @csrf

                        <div class="input">                                                
                            <label for="title">Title</label>
                            <input name="title" type="text" id="title" placeholder="Enter Title">

                            @error('title')
                                <small class="text-warning">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="input">
                            <label for="purpose">Purpose</label>
                            <input name="purpose" type="text" id="purpose"  placeholder="Enter Purpose">

                            @error('purpose')
                            <small class="text-warning">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="input">
                            <label for="user_id">User_id</label>
                            <input name="user_id" type="text" id="user_id" placeholder="Enter UserId">


                            @error('userid')
                            <small class="text-warning">{{ $message }}</small>
                            @enderror

                        <div class="input">
                            <label for="question_id">Question_id</label>
                            <input name="question_id" type="text" id="question_id"  placeholder="Enter QuestionId">

                            @error('questionId')
                            <small class="text-warning">{{ $message }}</small>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary">Create Questionnaire</button>
                        <button type="button" onclick="window.location='{{ url("questionnaire/create") }}'">Back</button>

                        <button type="button" href="{{ route('home') }}"> Home </button>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<div class="body-text">
</div>
</body>
@endsection
