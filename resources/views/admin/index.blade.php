@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Dashboard</h3>
                            <div class="nk-block-des text-soft"><p>Welcome to Learning Management Dashboard.</p></div>
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
                                                            <a href="#"><span>Web Development</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><span>Mobile Application</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><span>Graphics Design</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nk-block-tools-opt d-none d-sm-block">
                                            <a class="btn btn-primary" data-bs-toggle="modal" href="#modalCreate"><em class="icon ni ni-plus"></em><span>Add Category</span></a>
                                        </li>
                                        <li class="nk-block-tools-opt d-block d-sm-none">
                                            <a class="btn btn-icon btn-primary" data-bs-toggle="modal" href="#modalCreate"><em class="icon ni ni-plus"></em></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <a href="/demo2/lms/courses.html" class="d-flex align-items-center">
                                            <div class="user-avatar sq bg-purple"><span>GD</span></div>
                                            <div class="ms-3">
                                                <h6 class="title mb-1">Graphics Design</h6>
                                                <span class="sub-text">4 SubCategories</span>
                                            </div>
                                        </a>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li>
                                                        <a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete Category</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Website Design & Develop the website with web applications</p>
                                    <ul class="d-flex flex-wrap g-1">
                                        <li><span class="badge badge-dim bg-primary">Photoshop</span></li>
                                        <li><span class="badge badge-dim bg-danger">Adobe Illustrator</span></li>
                                        <li><span class="badge badge-dim bg-info">Logo Design</span></li>
                                        <li><span class="badge badge-dim bg-warning">Drawing</span></li>
                                        <li><span class="badge badge-dim bg-secondary">Figma</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <a href="/demo2/lms/courses.html" class="d-flex align-items-center">
                                            <div class="user-avatar sq bg-warning"><span>WD</span></div>
                                            <div class="ms-3">
                                                <h6 class="title mb-1">Web Development</h6>
                                                <span class="sub-text">5 SubCategories</span>
                                            </div>
                                        </a>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li>
                                                        <a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete Category</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Website Design & Develop the website with web applications</p>
                                    <ul class="d-flex flex-wrap g-1">
                                        <li><span class="badge badge-dim bg-primary">Responsive Design</span></li>
                                        <li><span class="badge badge-dim bg-danger">Wordpress Customization</span></li>
                                        <li><span class="badge badge-dim bg-info">Theme Development</span></li>
                                        <li><span class="badge badge-dim bg-warning">Bootstrap</span></li>
                                        <li><span class="badge badge-dim bg-secondary">HTML & CSS Grid</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <a href="/demo2/lms/courses.html" class="d-flex align-items-center">
                                            <div class="user-avatar sq bg-info"><span>MA</span></div>
                                            <div class="ms-3">
                                                <h6 class="title mb-1">Mobile Application</h6>
                                                <span class="sub-text">4 SubCategories</span>
                                            </div>
                                        </a>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li>
                                                        <a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete Category</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Website Design & Develop the website with web applications</p>
                                    <ul class="d-flex flex-wrap g-1">
                                        <li><span class="badge badge-dim bg-primary">Mobile App Design</span></li>
                                        <li><span class="badge badge-dim bg-danger">User Interface</span></li>
                                        <li><span class="badge badge-dim bg-info">Design Thinking</span></li>
                                        <li><span class="badge badge-dim bg-warning">Prototyping</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <a href="/demo2/lms/courses.html" class="d-flex align-items-center">
                                            <div class="user-avatar sq bg-purple"><span>GD</span></div>
                                            <div class="ms-3">
                                                <h6 class="title mb-1">Graphics Design</h6>
                                                <span class="sub-text">4 SubCategories</span>
                                            </div>
                                        </a>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li>
                                                        <a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete Category</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Website Design & Develop the website with web applications</p>
                                    <ul class="d-flex flex-wrap g-1">
                                        <li><span class="badge badge-dim bg-primary">Photoshop</span></li>
                                        <li><span class="badge badge-dim bg-danger">Adobe Illustrator</span></li>
                                        <li><span class="badge badge-dim bg-info">Logo Design</span></li>
                                        <li><span class="badge badge-dim bg-warning">Drawing</span></li>
                                        <li><span class="badge badge-dim bg-secondary">Figma</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <a href="/demo2/lms/courses.html" class="d-flex align-items-center">
                                            <div class="user-avatar sq bg-warning"><span>WD</span></div>
                                            <div class="ms-3">
                                                <h6 class="title mb-1">Web Development</h6>
                                                <span class="sub-text">5 SubCategories</span>
                                            </div>
                                        </a>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li>
                                                        <a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete Category</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Website Design & Develop the website with web applications</p>
                                    <ul class="d-flex flex-wrap g-1">
                                        <li><span class="badge badge-dim bg-primary">Responsive Design</span></li>
                                        <li><span class="badge badge-dim bg-danger">Wordpress Customization</span></li>
                                        <li><span class="badge badge-dim bg-info">Theme Development</span></li>
                                        <li><span class="badge badge-dim bg-warning">Bootstrap</span></li>
                                        <li><span class="badge badge-dim bg-secondary">HTML & CSS Grid</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <a href="/demo2/lms/courses.html" class="d-flex align-items-center">
                                            <div class="user-avatar sq bg-info"><span>MA</span></div>
                                            <div class="ms-3">
                                                <h6 class="title mb-1">Mobile Application</h6>
                                                <span class="sub-text">4 SubCategories</span>
                                            </div>
                                        </a>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li>
                                                        <a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete Category</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Website Design & Develop the website with web applications</p>
                                    <ul class="d-flex flex-wrap g-1">
                                        <li><span class="badge badge-dim bg-primary">Mobile App Design</span></li>
                                        <li><span class="badge badge-dim bg-danger">User Interface</span></li>
                                        <li><span class="badge badge-dim bg-info">Design Thinking</span></li>
                                        <li><span class="badge badge-dim bg-warning">Prototyping</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <a href="/demo2/lms/courses.html" class="d-flex align-items-center">
                                            <div class="user-avatar sq bg-purple"><span>GD</span></div>
                                            <div class="ms-3">
                                                <h6 class="title mb-1">Graphics Design</h6>
                                                <span class="sub-text">4 SubCategories</span>
                                            </div>
                                        </a>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li>
                                                        <a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete Category</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Website Design & Develop the website with web applications</p>
                                    <ul class="d-flex flex-wrap g-1">
                                        <li><span class="badge badge-dim bg-primary">Photoshop</span></li>
                                        <li><span class="badge badge-dim bg-danger">Adobe Illustrator</span></li>
                                        <li><span class="badge badge-dim bg-info">Logo Design</span></li>
                                        <li><span class="badge badge-dim bg-warning">Drawing</span></li>
                                        <li><span class="badge badge-dim bg-secondary">Figma</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <a href="/demo2/lms/courses.html" class="d-flex align-items-center">
                                            <div class="user-avatar sq bg-warning"><span>WD</span></div>
                                            <div class="ms-3">
                                                <h6 class="title mb-1">Web Development</h6>
                                                <span class="sub-text">5 SubCategories</span>
                                            </div>
                                        </a>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li>
                                                        <a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete Category</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Website Design & Develop the website with web applications</p>
                                    <ul class="d-flex flex-wrap g-1">
                                        <li><span class="badge badge-dim bg-primary">Responsive Design</span></li>
                                        <li><span class="badge badge-dim bg-danger">Wordpress Customization</span></li>
                                        <li><span class="badge badge-dim bg-info">Theme Development</span></li>
                                        <li><span class="badge badge-dim bg-warning">Bootstrap</span></li>
                                        <li><span class="badge badge-dim bg-secondary">HTML & CSS Grid</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
