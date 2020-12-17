<?php

namespace App\Http\Controllers;

use App\Models\TapeType;
use Illuminate\Http\Request;

class TapeTypeController extends Controller
{
    public function index()
    {
        return response()->json(TapeType::all());
    }

    public function tapetype($id)
    {
        return response()->json(TapeType::find($id));
    }

    public function create(Request $request)
    {
        $tapeType = TapeType::create($request->all());

        return response()->json($tapeType, 201);
    }

    public function update($id, Request $request)
    {
        $tapeType = TapeType::findOrFail($id);
        $tapeType->update($request->all());

        return response()->json($tapeType, 200);
    }

    public function delete($id)
    {
        TapeType::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
