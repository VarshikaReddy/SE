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
                                    <h3 class="nk-block-title page-title">Review Assignment</h3>
                                </div>
                                <br>
                                <h6>{{ $assignment->assignment->title }}</h6>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        Course Name: {{ $assignment->assignment->course->name }}
                                    </div>
                                    <div class="col-6">
                                        Student Name: {{ $assignment->assignment->course->name }}
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        Submission Date: {{ $assignment->created_at }}
                                    </div>
                                    <div class="col-6">
                                       Submitted File:  <a href="{{ route('admin.student-assignments.edit', $assignment) }}">{{ $assignment->assignment_file }}</a>
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        Total Marks: {{ $assignment->assignment->total_marks }}
                                    </div>
                                    <div class="col-6">
                                        Passing Marks: {{ $assignment->assignment->passing_marks }}
                                    </div>
                                </div>
                                <br>
                                <form action="{{ route('admin.student-assignments.update', $assignment) }}" method="post" enctype="multipart/form-data" role="form" class="pt-2">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label class="form-label" for="thumb">Obtained Marks</label>
                                                <div class="form-control-wrap">
                                                    <input type="number" class="form-control" name="grade" value="{{ $assignment->grade }}" placeholder="4" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-label" for="thumb">Feedback</label>
                                            <br>
                                            <textarea cols="90" rows="10" name="feedback" required> {{ $assignment->feedback }}</textarea>
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
