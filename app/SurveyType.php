<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SurveyType extends Model
{
    use SoftDeletes;

    protected $table = 'survey_types';

    protected $fillable = ['name', 'slug'];
}
