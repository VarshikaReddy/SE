<?php

namespace App\Http\Controllers;

use App\Models\StudentAssignment;
use Illuminate\Http\Request;

class StudentAssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assignments = StudentAssignment::whereHas('assignment', function ($assignment){
            $assignment->whereHas('course', function ($course){
                $course->where('instructor', auth()->user()->id);
            });
        })->get();
        return view('admin.pages.student-assignments._all')->with(['assignments' => $assignments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $assignments = StudentAssignment::where('user_id', auth()->user()->id)->get();
        return view('admin.pages.grades')->with(['assignments' => $assignments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentAssignment $studentAssignment)
    {
        return view('admin.pages.student-assignments.review')->with(['assignment' => $studentAssignment]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentAssignment $studentAssignment)
    {
        return response()->download(public_path('files/'.$studentAssignment->assignment_file));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentAssignment $studentAssignment)
    {
        $studentAssignment->update([
            'grade' => $request->grade,
            'feedback' => $request->feedback,
        ]);

        return redirect()->route('admin.student-assignments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentAssignment $studentAssignment)
    {
        //
    }
}
