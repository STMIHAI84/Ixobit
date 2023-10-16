<?php

namespace App\Http\Controllers;

use App\Models\Param;
use Illuminate\Http\Request;

class ParamController extends Controller
{
    public function index()
    {
        $params = Param::all();
        return response()->json($params);
    }

    public function show($id)
    {
        $param = Param::find($id);
        return response()->json($param);
    }

    public function store(Request $request)
    {
        $param = Param::create($request->all());
        return response()->json($param, 201);
    }

    public function update(Request $request, $id)
    {
        $param = Param::find($id);
        $param->update($request->all());
        return response()->json($param);
    }

    public function destroy($id)
    {
        $param = Param::find($id);
        $param->delete();
        return response()->json(null, 204);
    }
}
