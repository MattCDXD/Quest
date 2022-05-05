<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'survey_id', 'user_id', 'question_id','question'
    ];

}
