<?php

namespace App\Http\Controllers;

use App\Models\Tape;
use Illuminate\Http\Request;

class TapeController extends Controller
{
    public function index()
    {
        return response()->json(Tape::all());
    }

    public function tape($id)
    {
        return response()->json(Tape::find($id));
    }

    public function create(Request $request)
    {
        $tape = Tape::create($request->all());

        return response()->json($tape, 201);
    }

    public function update($id, Request $request)
    {
        $tape = Tape::findOrFail($id);
        $tape->update($request->all());

        return response()->json($tape, 200);
    }

    public function delete($id)
    {
        Tape::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
