<?php

namespace App\Http\Controllers;

use App\Models\CourseFeedback;
use Illuminate\Http\Request;

class CourseFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.feedback');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        CourseFeedback::create([
            'description' => $request->feedback,
            'course_id' => $request->course_id,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back()->with(['success'=> 'Thank you for your Feedback']);;
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseFeedback $courseFeedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseFeedback $courseFeedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseFeedback $courseFeedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseFeedback $courseFeedback)
    {
        //
    }
}
