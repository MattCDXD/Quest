<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Questions</title>
</head>
<body>

@extends('layouts.app')


@section('content')
    <header>
        <h1>Questionnaire</h1>
        <a href="/questionnaire/create">Add Questions</a>
    </header>
    <main>
<div class="row" id="questtable">
    <br />
    <h3 align="center"> Questionnaire Data</h3>
    <br />
    <table class="table table-bordered" align="center">
    <tr>
        <th>Question Id</th>
        <th>User Id</th>
        <th>Survey Id</th>
        <th>title</th>
        <th>description</th>
    </tr>
    @foreach($questionnaires as $questionnaire)
    <tr>
        <td>{{$questionnaire->question_id}}</td>
        <td>{{$questionnaire->user_id}}</td>
        <td>{{$questionnaire->survey_id}}</td>
        <td>{{$questionnaire->title}}</td>
        <td>{{$questionnaire->purpose}}</td>
    </tr>
    @endforeach

</div>

{!! Form::open() !!}

<div class="form-group">
{!! Form::label('title', 'Title:') !!}
{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('detail', 'Your Message:') !!}
{!! Form::textarea('detail', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('Add Question', ['class' => 'btn btn-primary form-control']) !!}
</div>


{!! Form::close() !!}

<div class="card">
                    <form action="/questionnaires" method="post">           
                                                                                
                        @csrf

                    <div class="input">
                            <label for="question_id">Question_id</label>
                            <input name="question_id" type="text" class="input-f" id="question_id"  placeholder="Enter QuestionId">
                    </div>

                    <div class="input">
                            <label for="user_id">User_Id</label>
                            <input name="user_id" type="text" class="input-f" id="user_id"  placeholder="Enter UserId">
                    </div>

                    <div class="input">
                            <label for="question_id">Question</label>
                            <input name="question_id" type="text" class="input-f" id="Question"  placeholder="Enter Question">
                    </div> 

                    <button type="submit" class="btn btn-primary">Create Question</button>
                    
</div>


    <form action="update" method="post">
        
    </form>
    </main>
@endsection
</body>
</html>