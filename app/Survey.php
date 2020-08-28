<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends Model
{
    use SoftDeletes;

    public function questions() {
        return $this->belongsToMany(Question::class, SurveyQuestion::class, 'survey_id', 'question_id');
    }
}
