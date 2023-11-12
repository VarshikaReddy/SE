@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Courses</h3>
                            <div class="nk-block-des text-soft"><p>You have total {{ count($courses) }} Courses.</p></div>
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
                                        <li class="nk-block-tools-opt d-none d-sm-block" data-bs-toggle="modal" data-bs-target="#modalCreate">
                                            <a href="#" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Course</span></a>
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
                                        <th class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="pid-all" /><label class="custom-control-label" for="pid-all"></label>
                                            </div>
                                        </th>
                                        <th class="nk-tb-col"><span class="sub-text">Course Name</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Instructor</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Lessons</span></th>
                                        <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Enrole Student</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Credit Hours</span></th>
                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Ending Date</span></th>
                                        <th class="nk-tb-col nk-tb-col-tools text-end">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li>
                                                                    <a href="#"><em class="icon ni ni-archive"></em><span>Mark As Archive</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><em class="icon ni ni-trash"></em><span>Remove Category</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($courses as $course)
                                        <tr class="nk-tb-item">
                                            <td class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="pid-01" /><label class="custom-control-label" for="pid-01"></label>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col">
                                                <a href="#" class="project-title">
                                                    <div class="user-avatar sq bg-purple"><span>{{ $course->prefix_name }}</span></div>
                                                    <div class="project-info"><h6 class="title">{{ $course->name }}</h6></div>
                                                </a>
                                            </td>
                                            <td class="nk-tb-col tb-col-lg"><span>{{ $course->instructor()->first()->full_name }}</span></td>
                                            <td class="nk-tb-col tb-col-lg"><span>Total lesson: {{ $course->lessons }}</span></td>
                                            <td class="nk-tb-col tb-col-xxl"><span>Total enrolment: {{ $course->lessons }}</span></td>
                                            <td class="nk-tb-col tb-col-md"><span class="badge badge-dim bg-success">{{ $course->status }}</span></td>
                                            <td class="nk-tb-col tb-col-mb"><span>{{ $course->credit_hours }}</span></td>
                                            <td class="nk-tb-col tb-col-mb"><span>{{ \Illuminate\Support\Carbon::parse($course->ending_date)->format('d.m.yy') }}</span></td>
                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    @if(Auth::user()->hasAnyRole(['instructor']))
                                                                    <li>
                                                                        <a onclick="editCourse('{{ $course }}')" data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Course</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete Course</span></a>
                                                                        <form id="delete_form" action="{{ route('admin.courses.destroy', $course) }}" method="post">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <button type="submit" class="dropdown-item"><em class="icon ni ni-delete"></em><span>Delete Course</span></button>
                                                                        </form>
                                                                    </li>
                                                                    @endif
                                                                    @if(Auth::user()->hasAnyRole(['student']))
                                                                            <li>
                                                                                <a onclick="editCourse('{{ $course }}')" data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>View Course</span></a>
                                                                            </li>
                                                                    <li>
                                                                        <a style="cursor: pointer" onclick="enrollCourse('{{ $course->id }}')"><em class="icon ni ni-edit"></em><span>Enroll in Course</span></a>
                                                                    </li>
                                                                    @endif

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="card-inner">
                                {!! $courses->links() !!}

                                <div class="nk-block-between-md g-3">
                                    <div class="g">

                                    </div>
                                    <div class="g">
                                        <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                            <div>Page</div>
                                            <div>
                                                <select class="form-select js-select2" data-search="on" data-dropdown="xs center">
                                                    <option value="page-1">1</option>
                                                </select>
                                            </div>
                                            <div>OF {{ count($courses)%10 }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalCreate">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Create Course</h5>
                    <form action="{{ route('admin.courses.store') }}" method="post" enctype="multipart/form-data" role="form" class="pt-2">
                        @csrf
                        <div class="row gy-3 gx-gs">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="course-name">Course Name</label>
                                    <div class="form-control-wrap"><input type="text" class="form-control" name="name" placeholder="e.g. Responsive Design" /></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="dificulties">Course Dificulties</label>
                                    <select class="form-select js-select2" name="difficulty">
                                        <option>Beginners</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="course-lesson">Total Lesson</label>
                                    <div class="form-control-wrap"><input type="number" class="form-control" name="lessons" placeholder="40" /></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Course thumbnail</label>
                                    <div class="form-control-wrap">
                                        <div class="form-file"><input type="file" class="form-file-input" name="thumbnail" /><label class="form-file-label" for="customFile-create">Choose file</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Course Description</label>
                                    <div class="form-control-wrap"><textarea name="description" cols="50"></textarea></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Status</label>
                                    <div class="form-control-wrap">
                                        <ul class="custom-control-group g-3 align-center flex-wrap">
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" checked name="status" value="active" /><label class="custom-control-label" for="reg-enable">Active</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="status" value="pending" /><label class="custom-control-label" for="reg-disable">Pending</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="status" value="rejected" /><label class="custom-control-label" for="reg-request">Rejected</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="course-credits">Credit Hours</label>
                                    <div class="form-control-wrap"><input type="number" class="form-control" name="credit_hours" id="course-credits" placeholder="4" /></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Ending Date</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-left"><em class="icon ni ni-calendar-alt"></em></div>
                                        <input type="text" name="ending_date" class="form-control date-picker" placeholder="mm/dd/yyyy" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group"><button data-bs-dismiss="modal" type="submit" class="btn btn-primary">Save Informations</button></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalEdit">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Edit Course</h5>
                    <form action="#" class="pt-2">
                        <div class="row gy-3 gx-gs">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="edit-course-name">Course Name</label>
                                    <div class="form-control-wrap"><input type="text" class="form-control" id="edit-course-name" value="Environmental Engineering" /></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="edit-dificulties">Course Dificulties</label>
                                    <select class="form-select js-select2" id="edit-dificulties">
                                        <option>Beginners</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="edit-lesson">Total Lesson</label>
                                    <div class="form-control-wrap"><input type="number" class="form-control" id="edit-lesson" value="40" /></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Course thumbnail</label>
                                    <div class="form-control-wrap">
                                        <div class="form-file"><input type="file" multiple class="form-file-input" id="edit-customFile" /><label class="form-file-label" for="edit-customFile">Choose file</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="edit-description">Course Description</label>
                                    <div class="form-control-wrap"><textarea id="edit-description" name="description" cols="50"></textarea></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="status">Status</label>
                                    <div class="form-control-wrap">
                                        <ul class="custom-control-group g-3 align-center flex-wrap">
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" checked name="reg-public" id="edit-course-active" /><label class="custom-control-label" for="edit-course-active">Active</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="reg-public" id="edit-course-pending" /><label class="custom-control-label" for="edit-course-pending">Pending</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="reg-public" id="edit-course-reject" /><label class="custom-control-label" for="edit-course-reject">Rejected</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="course-price-edit">Credit Hours</label>
                                    <div class="form-control-wrap"><input type="number" class="form-control" id="edit-course-price" /></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Ending Date</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-left"><em class="icon ni ni-calendar-alt"></em></div>
                                        <input type="text" class="form-control date-picker" placeholder="mm/dd/yyyy" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group"><button data-bs-dismiss="modal" type="submit" class="btn btn-primary">Save Informations</button></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalDelete">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal py-4">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                        <h4 class="nk-modal-title">Are You Sure ?</h4>
                        <div class="nk-modal-text mt-n2"><p class="text-soft">This event data will be removed permanently.</p></div>
                        <ul class="d-flex justify-content-center gx-4 mt-4">
                            <li><button data-bs-dismiss="modal" id="deleteEvent" class="btn btn-success">Yes, Delete it</button></li>
                            <li><button data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#editEventPopup" class="btn btn-danger btn-dim">Cancel</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="{{ asset('assets/css/editors/quill.css') }}" />
    <script src="{{ asset('assets/js/libs/editors/quill.js') }}"></script>
    <script src="{{ asset('assets/js/editors.js') }}"></script>

    <script>
        $('#deleteEvent').click(function (){
            $('#delete_form').submit()
        });

        function editCourse(course){
            console.log(course['name']);
            $('#edit-course-name').val(course.name);
            $('#edit-dificulties').val(course.difficulty);
            $('#edit-lesson').val(course.lessons);
            $('#edit-customFile').val(course.thumbnail);
            $('#edit-description').val(course.description);
            $('#edit-course-active').val(course.status);
            $('#course-credits').val(course.credit_hours);
        }
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
