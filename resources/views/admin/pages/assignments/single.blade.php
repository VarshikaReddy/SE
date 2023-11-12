@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title"> {{  isset($assignment) ? 'Update' : 'Create' }} Assignment</h3>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="card card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner">
                                <form action="{{ isset($assignment) ? route('admin.assignments.update', $assignment) : route('admin.assignments.store') }}" method="post" enctype="multipart/form-data" role="form" class="pt-2">
                                    @csrf
                                    @if(isset($assignment))
                                        @method('PUT')
                                    @endif
                                    <div class="row gy-3 gx-gs mb-2">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label" for="course-name">Assignment Title</label>
                                                <div class="form-control-wrap"><input type="text" class="form-control" name="title" placeholder="e.g. Responsive Design" value="{{ isset($assignment) ? $assignment->title : '' }}"/></div>
                                            </div>
                                        </div>
                                    </div>
                                        @php
                                            $courses = \App\Services\DB\CourseService::build()->getUserCourses(auth()->user());
                                        @endphp
                                    <div class="row gy-3 gx-gs">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label" for="dificulties">Course</label>
                                                <select class="form-select js-select2" name="course_id">
                                                    @foreach($courses as $course)
                                                        <option value="{{ $course->id }}" {{ isset($assignment) && ($assignment->course->id == $course->id) ? 'selected' : '' }}>{{ $course->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label" for="thumb">Assignment thumbnail</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-file"><input type="file" class="form-file-input" name="thumbnail"  value="{{ isset($assignment) ? $assignment->thumbnail : '' }}"/><label class="form-file-label" for="customFile-create">Choose file</label></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="thumb">Assignment Description</label>
                                                <div class="form-control-wrap"><textarea name="description" cols="80" rows="5">{{ isset($assignment) ? $assignment->description : '' }}</textarea></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gy-3 gx-gs mb-2">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label class="form-label" for="course-credits">Total Marks</label>
                                                <div class="form-control-wrap"><input type="number" class="form-control" name="total_marks" id="course-credits" value="{{ isset($assignment) ? $assignment->total_marks : '' }}" placeholder="4" /></div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label class="form-label" for="course-credits">Passing Marks</label>
                                                <div class="form-control-wrap"><input type="number" class="form-control" name="passing_marks" id="course-credits" value="{{ isset($assignment) ? $assignment->passing_marks : '' }}" placeholder="4" /></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gy-3 gx-gs mb-2">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label">Submission Date</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-left"><em class="icon ni ni-calendar-alt"></em></div>
                                                    <input type="text" name="submission_date" class="form-control date-picker" placeholder="mm/dd/yyyy" value="{{ isset($assignment) ? $assignment->submission_date : '' }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group"><button type="submit" class="btn btn-primary">Save Informations</button></div>
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
