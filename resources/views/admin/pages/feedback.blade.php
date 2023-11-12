@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="card card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title"> Courses Feedback</h3>
                                </div>
                                <br>
                                @if(session('success'))
                                    <div class="text-success mb-2">{{ session('success') }}</div>
                                @endif
                                <form action="{{ route('admin.feedback.store') }}" method="post" enctype="multipart/form-data" role="form" class="pt-2">
                                    @csrf

                                    @php
                                        $courses = \App\Services\DB\CourseService::build()->getEnrolledCourses(auth()->user());
                                    @endphp
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label class="form-label">Courses</label>
                                                <select class="form-select js-select2" name="course_id" required>
                                                    @foreach($courses as $course)
                                                        <option value="{{ $course->id }}" {{ isset($assignment) && ($assignment->course->id == $course->id) ? 'selected' : '' }}>{{ $course->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-label" for="thumb">Feedback</label>
                                            <br>
                                            <textarea cols="90" rows="10" name="feedback" required></textarea>
                                        </div>
                                    </div>
                                    <br>
                                    @csrf
                                    <div class="col-12">
                                        <div class="form-group"><button type="submit" class="btn btn-primary">Submit Feedback</button></div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <link rel="stylesheet" href="{{ asset('assets/css/editors/quill.css') }}" />
    <script src="{{ asset('assets/js/libs/editors/quill.js') }}"></script>
    <script src="{{ asset('assets/js/editors.js') }}"></script>
@endsection
