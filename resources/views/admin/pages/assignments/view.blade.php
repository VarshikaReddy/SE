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
                                    <h3 class="nk-block-title page-title"> Assignment Details</h3>
                                </div>
                                <br>
                                <h6>{{ $assignment->title }}</h6>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        Course Name: {{ $assignment->course->name }}
                                    </div>
                                    <div class="col-6">
                                        Course Name: {{ $assignment->course->name }}
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        Total Marks: {{ $assignment->total_marks }}
                                    </div>
                                    <div class="col-6">
                                        Passing Marks: {{ $assignment->passing_marks }}
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        Deadline: {{ $assignment->total_marks }}
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <b>Description</b><br>
                                        {{ $assignment->description }}
                                    </div>
                                </div>
                                <br>
                                <form action="{{ route('admin.assignments.submit') }}" method="post" enctype="multipart/form-data" role="form" class="pt-2">
                                    @csrf
                                    <input type="hidden" name="assignment_id" value="{{ $assignment->id }}">
                                    <div class="row gy-3 gx-gs mb-2">
                                        <div class="col-3">
                                            <label class="form-label" for="thumb">Submit Your Assignment Here</label>
                                            <div class="form-control-wrap">
                                                <div class="form-file"><input type="file" class="form-file-input" name="assignment_file" value="{{ isset($assignment) ? $assignment->thumbnail : '' }}" required/><label class="form-file-label" for="customFile-create">Choose file</label></div>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="col-12">
                                            <div class="form-group"><button type="submit" class="btn btn-primary">Submit Assignment</button></div>
                                        </div>
                                    </div>
                                </form>
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
