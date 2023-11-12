@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="card">
                        <div class="card-aside-wrap">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-between d-flex justify-content-between">
                                        <div class="nk-block-head-content">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="nk-block-title">Personal Information</h4>
                                                @if(session('success'))
                                                    <div class="text-success mb-2">{{ session('success') }}</div>
                                                @endif
                                            </div>
                                            <div class="nk-block-des"><p>Basic info, like your name and address, that you use on Nio Platform.</p></div>
                                        </div>
                                        <div class="d-flex align-center">
                                            <div class="nk-tab-actions me-n1">
                                                <a class="btn btn-icon btn-trigger" data-bs-toggle="modal" href="#profile-edit"><em class="icon ni ni-edit"></em></a>
                                            </div>
                                            <div class="nk-block-head-content align-self-start d-lg-none">
                                                <a href="#" class="toggle btn btn-icon btn-trigger" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-block">
                                    <div class="nk-data data-list">
                                        <div class="data-head"><h6 class="overline-title">Basics</h6></div>
                                        <div class="data-item">
                                            <div class="data-col"><span class="data-label">Full Name</span><span class="data-value">{{ Auth::user()->full_name }}</span></div>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col"><span class="data-label">Display Name</span><span class="data-value">{{ Auth::user()->full_name }}</span></div>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col"><span class="data-label">Email</span><span class="data-value">{{ Auth::user()->email }}</span></div>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col"><span class="data-label">Phone Number</span><span class="data-value text-soft">{{ Auth::user()->phone }}</span></div>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col"><span class="data-label">Date of Birth</span><span class="data-value">Not add yet</span></div>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col"><span class="data-label">Nationality</span><span class="data-value">Not add yet</span></div>
                                        </div>
                                        <div class="data-item" data-tab-target="#address">
                                            <div class="data-col">
                                                <span class="data-label">Address</span>
                                                <span class="data-value">
                                                                        Not add yet
                                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-data data-list">
                                        <div class="data-head"><h6 class="overline-title">Preferences</h6></div>
                                        <div class="data-item">
                                            <div class="data-col"><span class="data-label">Language</span><span class="data-value">English (United State)</span></div>
                                            <div class="data-col data-col-end"><a data-bs-toggle="modal" href="#modalLanguage" class="link link-primary">Change Language</a></div>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col"><span class="data-label">Date Format</span><span class="data-value">M, D, YYYY</span></div>
                                            <div class="data-col data-col-end"><a data-bs-toggle="modal" href="#modalDate" class="link link-primary">Change</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                <div class="card-inner-group" data-simplebar>
                                    <div class="card-inner">
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary"><span>{{ Auth::user()->prefix_name }}</span></div>
                                            <div class="user-info"><span class="lead-text">{{ Auth::user()->full_name }}</span><span class="sub-text">{{ Auth::user()->email }}</span></div>
                                            <div class="user-action">
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-trigger me-n2" data-bs-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li>
                                                                <a href="#"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <div class="user-account-info py-0">
                                            <h6 class="overline-title-alt">Current Progress</h6>
                                            <div class="user-balance">12.4%</div>
                                            <div class="user-balance-sub">
                                                Pending <span>17.6%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner p-0">
                                        <ul class="link-list-menu">
                                            <li>
                                                <a class="active" href="#"><em class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-inner">
                                        <div class="user-account-info py-0">
                                            <h6 class="overline-title-alt">Last Login</h6>
                                            <p>{{ \Illuminate\Support\Carbon::now()->format('d-M-y h:i A') }}</p>
                                            <h6 class="overline-title-alt">Login IP</h6>
                                            <p>{{  request()->ip() }}</p>
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
    <div class="modal fade" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Update Profile</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#address">Address</a></li>
                    </ul>
                    <form id="update-user" action="{{ route('admin.user.update', Auth::user()) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="tab-content">

                                <div class="tab-pane active" id="personal">
                                    <div class="row gy-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="full-name">First Name</label><input type="text" name="first_name" class="form-control" value="{{ Auth::user()->first_name }}" placeholder="Enter First name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="display-name">Last Name</label><input type="text" name="last_name" class="form-control" value="{{ Auth::user()->last_name }}" placeholder="Enter Last name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="form-label" for="personal-email">Email</label><input type="email" name="email" class="form-control" id="personal-email" value="{{ Auth::user()->email }}" /></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="form-label" for="phone-no">Phone Number</label><input type="text" name="phone" class="form-control" id="phone-no" value="{{ Auth::user()->phone }}" placeholder="Phone Number" /></div>
                                        </div>
                                        <div class="col-12">
                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                <li><button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Update Profile</button></li>
                                                <li><a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="address">
                                    <div class="row gy-4">
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="form-label" for="address-l1">Address Line 1</label><input type="text" class="form-control" id="address-l1" value="{{ Auth::user()->email }}" /></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="form-label" for="address-l2">Address Line 2</label><input type="text" class="form-control" id="address-l2" value="" /></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="form-label" for="address-st">State</label><input type="text" class="form-control" id="address-st" value="Kentucky" /></div>
                                        </div>
                                        <div class="col-12">
                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                <li><a href="#" data-bs-dismiss="modal" class="btn btn-primary">Update Address</a></li>
                                                <li><a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalLanguage">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross"></em></a>
                <div class="modal-body">
                    <h5 class="title mb-4">Choose language</h5>
                    <div class="form-group">
                        <select class="form-select js-select2 form-control form-control-lg" data-search="on">
                            <option value="default_option">English (United State)</option>
                            <option value="option_select_name">Bangla</option>
                            <option value="option_select_name">English (United State)</option>
                            <option value="option_select_name">English (United Kingdom)</option>
                            <option value="option_select_name">Japanese</option>
                            <option value="option_select_name">Spanish</option>
                            <option value="option_select_name">Swedish</option>
                            <option value="option_select_name">German</option>
                            <option value="option_select_name">Chinese (Simplified)</option>
                        </select>
                    </div>
                    <div class="form-group"><button data-bs-dismiss="modal" type="submit" class="btn btn-primary">Save</button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalDate">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross"></em></a>
                <div class="modal-body">
                    <h5 class="title mb-4">Date Formate</h5>
                    <div class="form-group">
                        <select class="form-select js-select2 form-control form-control-lg">
                            <option value="default_option">M, D, YYYY</option>
                            <option value="option_select_name">D, M, YYYY</option>
                            <option value="option_select_name">M, D, YYYY</option>
                            <option value="option_select_name">YYYY, M, D</option>
                        </select>
                    </div>
                    <div class="form-group"><button data-bs-dismiss="modal" type="submit" class="btn btn-primary">Save</button></div>
                </div>
            </div>
        </div>
    </div>
@endsection
