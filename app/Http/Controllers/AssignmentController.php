<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Course;
use App\Models\StudentAssignment;
use App\Services\DB\AssignmentService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assignments = AssignmentService::build()->getCoursesAssignments();
        return view('admin.pages.assignments._all')->with(['assignments' => $assignments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.assignments.single');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request, &$assignment) {
            $imageName = null;
            if ($request->has('thumbnail')) {
                $imageName= $request->thumbnail->getClientOriginalName();
                $request->thumbnail->move(public_path().'/images/', $imageName);
            }
            $submission_date = Carbon::parse($request->submission_date)->toDateString();
            $assignment = Assignment::create($request->except(['_token', 'submission_date'])+['thumbnail' => $imageName, 'submission_date' => $submission_date]);
        });
       return redirect()->route('admin.assignments.index');
    }

    public function submit(Request $request){
        $assginmentName = null;
        if ($request->has('assignment_file')) {
            $assginmentName= $request->assignment_file->getClientOriginalName();
            $request->assignment_file->move(public_path().'/files/', $assginmentName);
        }
        StudentAssignment::create([
            'assignment_file' => $assginmentName,
            'user_id' => auth()->user()->id,
            'assignment_id' => $request->assignment_id
        ]);

        return redirect()->route('admin.assignments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Assignment $assignment)
    {
        return view('admin.pages.assignments.view')->with(['assignment' => $assignment]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assignment $assignment)
    {
        return view('admin.pages.assignments.single')->with(['assignment' => $assignment]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assignment $assignment)
    {
        DB::transaction(function () use ($request, $assignment) {
            $imageName = null;
            if ($request->has('thumbnail')) {
                $imageName= $request->thumbnail->getClientOriginalName();
                $request->thumbnail->move(public_path().'/images/', $imageName);
            }
            $submission_date = Carbon::parse($request->submission_date)->toDateString();
            $assignment->update($request->except(['_token', 'submission_date'])+['thumbnail' => $imageName, 'submission_date' => $submission_date]);
        });
        return redirect()->route('admin.assignments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assignment $assignment)
    {
        $assignment->delete();
        return redirect()->route('admin.assignments.index');
    }
}
