<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use App\Question;

class QuestionController extends Controller
{
    
        public function index(){
        {

            $questionnaires = questionnaire::all();
            return view('questionnaire.create', compact('questionnaire'));
        }
    }
    
        
        public function create()
        {
        
            return view('questionnaire.create');
            }
        

            public function store()                         // validate data
            {
                $data = request()->validate([
                    'question' => 'required',
                    'user_id' => 'required',
                    'question_id' => 'required',
                ]);
        
                $question = \App\Question::create($data);
        
                return redirect('/questions/'. $question->id);
            }
        
        
           
            public function show(Questionnaire $questionnaire)
            {
    
            return view('questionnaire.index',compact('questionnaire'));
            }
        
        
            public function edit(Questionnaire $questionnaire)
            {
        
            return view('questionnaire.create',compact('questionnaire'));
            }
        
           
            public function update(Request $request,$id)
            {                                                       // validate and update form
        
        
                $request->validate([
                'title'=>'required',
                'purpose'=> 'required',
                'question_id' => 'required',
                'user_id' => 'required',
                'survey_id' => 'required']);
        
        
                $questionnaire = Questionnaire::find($id);
                $questionnaire->title = $request->get('title');
                $questionnaire->purpose = $request->get('purpose');
                $questionnaire->question_id = $request->get('question_id');
                $questionnaire->user_id = $request->get('user_id');
                $questionnaire->survey_id = $request->get('survey_id');
                
        
                $questionnaire->update();
        
                return redirect('/questionnaire')->with('success', 'Questions have been updated successfully');
            }
        
           
            public function destroy(Questionnaire $questionnaire)      // delete function
            {

                $questionnaire->delete();
                return redirect('/questionnaire')->with('success', 'Question removed successfully');
        }
        
    
    }
        
    

