<?php

namespace App\Http\Controllers;

use App\Models\Execute;
use Illuminate\Http\Request;

class ExecuteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proccesExecutions = Execute::all();
        return response()->json($proccesExecutions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'process' => 'required',
            'robot' => 'required',
            'machine' => 'required',
            'job' => 'required',
            'status' => 'required',
            'date_ini' => 'required',
            'date_end' => 'required',
        ]);

        $execute = new Execute();
        $execute->process = $request->input('process');
        $execute->robot = $request->input('robot');
        $execute->machine = $request->input('machine');
        $execute->job = $request->input('job');
        $execute->status = $request->input('status');
        $execute->date_ini = $request->input('date_ini');
        $execute->date_end = $request->input('date_end');
        $execute->save();

        return response()->json([
            'message' => 'Se a crado la Procces Execution',
            'execute' => $execute,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Execute  $execute
     * @return \Illuminate\Http\Response
     */
    public function show(Execute $execute)
    {
        return $execute;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Execute  $execute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Execute $execute)
    {
        $request->validate([
            'process' => 'nullable',
            'robot' => 'nullable',
            'machine' => 'nullable',
            'job' => 'nullable',
            'status' => 'nullable',
            'date_ini' => 'nullable',
            'date_end' => 'nullable',
        ]);

        if ($request->input('process')) {
            $execute->process = $request->input('process');
        }
        if ($request->input('robot')) {
            $execute->robot = $request->input('robot');
        }
        if ($request->input('machine')) {
            $execute->machine = $request->input('machine');
        }
        if ($request->input('job')) {
            $execute->job = $request->input('job');
        }
        if ($request->input('status')) {
            $execute->status = $request->input('status');
        }
        if ($request->input('date_ini')) {
            $execute->date_ini = $request->input('date_ini');
        }
        if ($request->input('date_end')) {
            $execute->date_end = $request->input('date_end');
        }

        $execute->save();

        return response()->json([
            'message' => 'Se a actualizado la execute',
            'execute' => $execute,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Execute  $execute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Execute $execute)
    {
        $execute->delete();

        return response()->json([
            'message' => 'Se elimino el area',
        ]);
    }
}
