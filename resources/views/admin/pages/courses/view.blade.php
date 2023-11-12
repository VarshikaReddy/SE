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
                                    <h3 class="nk-block-title page-title"> Course Details</h3>
                                </div>
                                <br>
                                <h6>{{ $course->name }}</h6>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        @php
                                            $user =\App\Models\User::find($course->instructor)
                                         @endphp
                                        Instructor: {{ $user->first_name.' '.$user->last_name }}
                                    </div>
                                    <div class="col-6">
                                        Enrollments: {{ count($course->enrollments) }}
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        Credit Hours: {{ $course->credit_hours }}
                                    </div>
                                    <div class="col-6">
                                        Ending Date: {{ $course->ending_date }}
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <b>Description</b><br>
                                        {{ $course->description }}
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="title mb-1">Reviews</h6>
                                        <br>
                                    @foreach($course->reviews as $review)
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                                        <a href="#" class="d-flex align-items-center">
                                                            <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em></div>                                                        <div class="ms-3">
                                                                <span class="title mb-1">{{ $review->user->full_name }}</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <p> {{ $review->description }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
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
