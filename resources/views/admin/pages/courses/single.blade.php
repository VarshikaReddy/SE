@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            @php
                                $readOnly = \Illuminate\Support\Facades\Route::currentRouteName() == 'admin.courses.show';
                            @endphp
                            @if($readOnly)
                                <h3 class="nk-block-title page-title"> Course Details </h3>
                            @else
                                <h3 class="nk-block-title page-title"> {{ isset($course) ? 'Update' : 'Create' }} Course</h3>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="card card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner">
                                <form action="{{ isset($course) ? route('admin.courses.update', $course) : route('admin.courses.store')  }}" method="post" enctype="multipart/form-data" role="form" class="pt-2">
                                    @csrf
                                    @if(isset($course)) @method('PUT') @endif
                                    <div class="row gy-3 gx-gs">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label" for="course-name">Course Name</label>
                                                <div class="form-control-wrap"><input type="text" class="form-control" name="name" placeholder="e.g. Responsive Design" value="{{ isset($course) ? $course->name :'' }}" {{ $readOnly ? 'disabled' : '' }}/></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label" for="dificulties">Course Dificulties</label>
                                                <select class="form-select js-select2" name="difficulty" {{ $readOnly ? 'disabled' : '' }}>
                                                    <option value="beginner" {{ isset($course) && ($course->difficulty == 'beginner') ? 'selected' : '' }}>Beginners</option>
                                                    <option value="intermediate" {{ isset($course) && ($course->difficulty == 'intermediate') ? 'selected' : '' }}>Intermediate</option>
                                                    <option value="advanced" {{ isset($course) && ($course->difficulty == 'advanced') ? 'selected' : '' }}>Advanced</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label" for="course-lesson">Total Lesson</label>
                                                <div class="form-control-wrap"><input type="number" class="form-control" name="lessons" placeholder="40" value="{{ isset($course) ? $course->lessons :'' }}" {{ $readOnly ? 'disabled' : '' }}/></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label" for="thumb">Course thumbnail</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-file"><input type="file" class="form-file-input" name="thumbnail" value="{{ isset($course) ? $course->thumbnail :'' }}"  {{ $readOnly ? 'disabled' : '' }}/><label class="form-file-label" for="customFile-create">Choose file</label></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="thumb">Course Description</label>
                                                <div class="form-control-wrap"><textarea name="description" cols="50" {{ $readOnly ? 'disabled' : '' }}> {{ isset($course) ? $course->description :'' }}</textarea></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="thumb">Status</label>
                                                <div class="form-control-wrap">
                                                    <ul class="custom-control-group g-3 align-center flex-wrap">
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" {{ isset($course) && ($course->status == 'active') ? 'checked' : '' }}  name="status" value="active" {{ $readOnly ? 'disabled' : '' }}/><label class="custom-control-label" for="reg-enable">Active</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" {{ isset($course) && ($course->status == 'pending') ? 'checked' : '' }} name="status" value="pending" {{ $readOnly ? 'disabled' : '' }} /><label class="custom-control-label" for="reg-disable">Pending</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" {{ isset($course) && ($course->status == 'rejected') ? 'checked' : '' }} name="status" value="rejected" {{ $readOnly ? 'disabled' : '' }} /><label class="custom-control-label" for="reg-request">Rejected</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label" for="course-credits">Credit Hours</label>
                                                <div class="form-control-wrap"><input type="number" class="form-control" name="credit_hours" id="course-credits" placeholder="4"  value="{{ isset($course) ? $course->credit_hours :'' }}" {{ $readOnly ? 'disabled' : '' }}/></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label">Ending Date</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-left"><em class="icon ni ni-calendar-alt"></em></div>
                                                    <input type="text" name="ending_date" class="form-control date-picker" placeholder="mm/dd/yyyy"  value="{{ isset($course) ? $course->ending_date :'' }}" {{ $readOnly ? 'disabled' : '' }}/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group"><button data-bs-dismiss="modal" type="submit" class="btn btn-primary  {{ $readOnly ? 'd-none' : '' }}">Save Informations</button></div>
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
