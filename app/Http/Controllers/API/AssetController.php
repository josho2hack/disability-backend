<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Asset;
use App\SubGroup;
use App\AssetCategory;
use Validator;

class AssetController extends Controller
{
    public $successStatus = 200;

    public function store(Request $request)
    {
        $input = $request->all();
        $asset = Asset::create($input);
        return response()->json($asset, 201);
    }

    public function getAll()
    {
        $assets = Asset::all();
        return response()->json($assets, $this->successStatus);
    }

    public function getById(Request $request)
    {
        $asset = Asset::with('assetCategory')->findOrFail($request->id);
        $subwithmain = SubGroup::with('mainGroup')->find($asset->assetCategory->sub_groups_id);
        $asset['subgroup'] = $subwithmain;
        return response()->json($asset, $this->successStatus);
    }

    public function update(Request $request, $id)
    {
        $asset = Asset::findOrFail($id);
        $asset->update($request->all());
        return response()->json($asset,$this->successStatus);
    }

    public function delete(Request $request, $id)
    {
        $asset = Asset::findOrFail($id);
        $asset->delete();
        return response()->json(null,204);
        //return 204;
    }
}
