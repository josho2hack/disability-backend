<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubGroup;

class MainGroupController extends Controller
{
    public $successStatus = 200;

    public function store(Request $request)
    {
        $input = $request->all();
        $sub = SubGroup::create($input);
        return response()->json($sub, 201);
    }

    public function getAll()
    {
        $sub = SubGroup::with('maingroup')->get();
        return response()->json($sub, $this->successStatus);
    }

    public function getById(Request $request)
    {
        $sub = SubGroup::with('maingroup')->findOrFail($request->id);
        return response()->json($sub, $this->successStatus);
    }

    public function update(Request $request, $id)
    {
        $sub = SubGroup::findOrFail($id);
        $sub->update($request->all());
        return response()->json($sub,$this->successStatus);
    }

    public function delete(Request $request, $id)
    {
        $sub = SubGroup::findOrFail($id);
        $sub->delete();
        return response()->json(null,204);
        //return 204;
    }
}
