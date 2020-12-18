<?php

namespace App\Http\Controllers;

use App\Models\TapeStatus;
use Illuminate\Http\Request;

class TapeStatusController extends Controller
{
    public function index()
    {
        return response()->json(TapeStatus::all());
    }

    public function tapestatus($id)
    {
        return response()->json(TapeStatus::find($id));
    }

    public function create(Request $request)
    {
        $tapeStatus = TapeStatus::create($request->all());

        return response()->json($tapeStatus, 201);
    }

    public function update($id, Request $request)
    {
        $tapeStatus = TapeStatus::findOrFail($id);
        $tapeStatus->update($request->all());

        return response()->json($tapeStatus, 200);
    }

    public function delete($id)
    {
        TapeStatus::findOrFail($id)->delete();

        return response('Deleted Successfully', 200);
    }
}
