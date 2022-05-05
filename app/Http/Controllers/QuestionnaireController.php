<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;

class QuestionnaireController extends Controller
{
    public function index()                         // change to view
    {
        return view('questionnaire.index');
    }

    public function create()
     {
        return view('questionnaire.create');
    }
    public function store()                         // validate data
    {
        $data = request()->validate([
            'title' => 'required',
            'purpose' => 'required',
            'user_id' => 'required',
            'question_id' => 'required',
        ]);

        $questionnaire = \App\Questionnaire::create($data);

        return redirect('/questionnaires/'. $questionnaire->id);
    }
   
   

    public function show(\App\Questionnaire $questionnaire)
    {
        $questionnaire->load('questions.answers.responses');

        return view('questionnaire.create', compact('questionnaire'));
    }

    public function questionnaire(){

    $questionnaires = questionnaire::all();

    return view('questionnaire.create', ['questionnaires' => $questionnaires]);
    }

    public function storeone()                         //
    {
        $data = request()->validate([
            'question' => 'required',
            'user_id' => 'required',
            'question_id' => 'required',
        ]);

        $question = \App\Question::create($data);

        return redirect('/questionnaires.create/'. $question->id);
    }
}

