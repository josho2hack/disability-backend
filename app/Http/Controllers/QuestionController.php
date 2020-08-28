<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\SurveyQuestion;
use App\Question;

class QuestionController extends Controller
{
    public function create($survey_id) {
        $survey = Survey::find($survey_id);
        
        return view('admin.survey-questions.create', compact('survey'));
    }

    public function store($survey_id, Request $request) {
        
        foreach ( $request->questions as $q ) {
            $question = new Question;
            $question->text = $q;
            $question->save();

            $sq = new SurveyQuestion;
            $sq->survey_id   = $survey_id;
            $sq->question_id = $question->id;
            $sq->save();
        }

        return redirect()->route('admin.surveys.index');
    }

    public function updates($survey_id, Request $request) {
        dd($survey_id, $request->all());
    }
}
