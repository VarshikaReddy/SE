@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Dashboard</h3>
                            <div class="nk-block-des text-soft"><p>Welcome to eduApp Dashboard.</p></div>
                        </div>
                        @php
                            $courses = \App\Services\DB\CourseService::build()->getEnrolledCourses(auth()->user());
                        @endphp
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown">
                                                    <em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        @foreach($courses as $course)
                                                            <li>
                                                                <a href="#"><span>{{ $course->name }}</span></a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block-des text-soft mb-2"><p>Enrolled Courses.</p></div>

                <div class="nk-block">
                    <div class="row g-gs">
                        @foreach($courses as $course)
                            <div class="col-sm-6 col-lg-4 col-xxl-3">
                                <div class="card h-100">
                                    <div class="card-inner">
                                        <div class="d-flex justify-content-between align-items-start mb-3">
                                            <a href="{{ route('admin.courses.show', $course) }}" class="d-flex align-items-center">
                                                <div class="user-avatar sq bg-purple"><span>GD</span></div>
                                                <div class="ms-3">
                                                    <h6 class="title mb-1">{{ $course->name }}</h6>
                                                    <span class="sub-text">{{ $course->credit_hours }} Credit Hours</span>
                                                </div>
                                            </a>
                                        </div>
                                        <p>{{ $course->description }}</p>
                                        <ul class="d-flex flex-wrap g-1">
                                            <li><span class="badge badge-dim bg-primary">Duration: {{ $course->ending_date }}</span></li>
                                            <li><span class="badge badge-dim bg-danger">Difficulty: {{ ucwords($course->difficulty) }}</span></li>
                                            <li><span class="badge badge-dim bg-info">Lessons: {{ ucwords($course->lessons) }}</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
