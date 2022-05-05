<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'survey_id', 'user_id', 'question_id','title','purpose'
    ];

    
}
