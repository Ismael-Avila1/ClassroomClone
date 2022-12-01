<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assignments.assignmentCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'instructions' => 'required',
            'points' => 'required',
            'due' => 'required'
        ]);

        Assignment::create($request->except('_token'));

        //Redirigir al CouseShow
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(Assignment $assignment)
    {
        return view('assignments.assignmentShow', compact('assignment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assignment $assignment)
    {
        return view('assignments.assignmentEdit', compact('assignment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assignment $assignment)
    {
        $request->validate([
            'title' => 'required',
            'instructions' => 'required',
            'points' => 'required',
            'due' => 'required'
        ]);

        $assignment->title = $request->title;
        $assignment->instructions = $request->instructions;
        $assignment->points = $request->points;
        $assignment->due = $request->due;
        $assignment->save();

        Assignment::where('id', $assignment->id)->update($request->except('_token', '_method'));

        //Redirigir al CouseShow
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assignment $assignment)
    {
        $assignment->delete();

        //Redirigir al CouseShow
    }
}
