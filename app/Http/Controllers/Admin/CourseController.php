<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Services\DB\CourseService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = CourseService::build()->getUserCourses(auth()->user());
        return view('admin.pages.courses._all')->with(['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.courses.single');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request, &$course) {

            $imageName = null;
            if ($request->has('thumbnail')) {
                $imageName= $request->thumbnail->getClientOriginalName();
                $request->thumbnail->move(public_path().'/images/', $imageName);
            }
            $ending_date = Carbon::parse($request->ending_date)->toDateTimeString();
            $course = Course::create($request->except(['_token', 'ending_date'])+['thumbnail' => $imageName, 'ending_date' => $ending_date, 'instructor' => Auth::user()->id]);
        });

        return redirect()->route('admin.courses.index');

    }

    public function upload(Request $request)
    {
        $imageName = $this->processThumbnail($request);
    }
    protected function processThumbnail(Request $request)
    {
        if ($this->hasThumbnail($request)) {
            return $this->saveThumbnail($request);
        }

        return null;
    }
    protected function hasThumbnail(Request $request)
    {
        return $request->has('thumbnail');
    }
    protected function saveThumbnail(Request $request)
    {
        $imageName = $request->thumbnail->getClientOriginalName();
        $request->thumbnail->move(public_path().'/images/', $imageName);

        return $imageName;
    }
    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('admin.pages.courses.view')->with(['course' => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('admin.pages.courses.single')->with(['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        DB::transaction(function () use ($request, $course) {

            $imageName = null;
            if ($request->has('thumbnail')) {
                $imageName= $request->thumbnail->getClientOriginalName();
                $request->thumbnail->move(public_path().'/images/', $imageName);
            }
            $ending_date = Carbon::parse($request->ending_date)->toDateTimeString();
            $course->update($request->except(['_token', 'ending_date'])+['thumbnail' => $imageName, 'ending_date' => $ending_date, 'instructor' => Auth::user()->id]);
        });

        return redirect()->route('admin.courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('admin.courses.index');
    }

    public function progress(){
        $courses = CourseService::build()->getEnrolledCourses(auth()->user());
        return view('admin.pages.progress')->with(['courses' => $courses]);
    }
}
