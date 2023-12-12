<?php

namespace App\Http\Controllers;

use App\Models\EvaluationDay;
use Illuminate\Http\Request;

class EvaluationDayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evaluations = EvaluationDay::all();
        return view('evaluation.list', compact('evaluations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('evaluation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        EvaluationDay::create($data);
        return redirect()->route('evaluation-day.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(EvaluationDay $EvaluationDay)
    {
        return view('evaluation.detail', compact('EvaluationDay'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EvaluationDay $EvaluationDay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EvaluationDay $EvaluationDay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvaluationDay $EvaluationDay)
    {
        //
    }
}
