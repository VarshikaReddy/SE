@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">View Grades</h3>
                            <div class="nk-block-des text-soft"><p>Here are your Grades.</p></div>
                        </div>
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
                                                        <li>
                                                            <a href="#"><span>Active</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><span>Pending</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><span>Rejected</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        @if(Auth::user()->hasAnyRole(['instructor']))
                                            <li class="nk-block-tools-opt d-none d-sm-block">
                                                <a href="{{ route('admin.assignments.create') }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Assignment</span></a>
                                            </li>
                                        @endif
                                        <li class="nk-block-tools-opt d-block d-sm-none" data-bs-toggle="modal" data-bs-target="#modalCreate">
                                            <a href="#" class="btn btn-icon btn-primary"><em class="icon ni ni-plus"></em></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="card card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner p-0">
                                <table class="nk-tb-list nk-tb-ulist">
                                    <thead>
                                    <tr class="nk-tb-item nk-tb-head">
                                        <th class="nk-tb-col"><span class="sub-text">Title</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Course</span></th>
                                        <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Obtained Marks</span></th>
                                        <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Feedback</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($assignments as $assignment)
                                        <tr class="nk-tb-item">
                                            <td class="nk-tb-col">
                                                <a href="#" class="project-title">
                                                    <div class="project-info"><h6 class="title">{{ $assignment->assignment->title }}</h6></div>
                                                </a>
                                            </td>
                                            <td class="nk-tb-col tb-col-lg"><span>{{ $assignment->assignment->course->name }}</span></td>
                                            <td class="nk-tb-col tb-col-xxl"><span> {{ $assignment->grade ?? 'N/A' }}</span></td>
                                            <td class="nk-tb-col tb-col-xxl"><span> {{ $assignment->feedback ?? 'N/A' }}</span></td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
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

    <script>
        function enrollCourse(course_id){
            var formData = new FormData();
            formData.append('course', course_id);
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.enroll.store')}}',
                contentType: false,
                processData: false,
                data: formData,
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                success: function () {
                    $('#modalAlert').modal('show');
                },
                error: function (xhr,status,error){
                    // $('#modalAlert').toggle();
                }
            });
        }
    </script>
@endsection
