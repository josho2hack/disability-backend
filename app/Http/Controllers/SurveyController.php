<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\SurveyType;

class SurveyController extends Controller
{
    public function index() {
        $surveys = Survey::latest()->get();
        
        return view('admin.surveys.index', compact('surveys'));
    }

    public function create() {
        $survey_types = SurveyType::latest()->get();

        return view('admin.surveys.create', compact('survey_types'));
    }
    
    public function store(Request $request) {
        $survey = new Survey;
        $survey->survey_type_id     = $request->survey_type_id;
        $survey->name               = $request->name;
        $survey->number_of_question = $request->number_of_question;
        $survey->start_date         = $request->start_date;
        $survey->end_date           = $request->end_date;
        
        if ( $survey->save() ) {
            return redirect()->route('admin.questions.create', $survey->id);
        }
    }

    public function show($survey_id) {
        $survey = Survey::find($survey_id);
        
        return view('admin.surveys.show', compact('survey'));
    }

    public function edit($survey_id) {
        $survey = Survey::find($survey_id);

        return view('admin.surveys.edit', compact('survey'));
    }

    public function destroy($survey_id) {
        $survey = Survey::find($survey_id);
        
        if ( $survey->delete() ) {
            return back()->with('success', 'ลบข้อมูลสำเร็จ');
        }
    }
}
