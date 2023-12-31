<div class="nk-header nk-header-fixed">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ms-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="{{ route('admin.index') }}" class="logo-link">
                    <h3>EDUAPP</h3>
                </a>
            </div>
            <div class="nk-header-search ms-3 ms-xl-0"><em class="icon ni ni-search"></em><input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything" /></div>
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown notification-dropdown">
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em></div>
                                <div class="user-info d-none d-xl-block">
                                    <div class="user-status user-status-active">{{ ucfirst(Auth::user()->roles->pluck('name')->first()) }}</div>
                                    <div class="user-name dropdown-indicator">{{ Auth::user()->full_name }}</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar"><span>{{ Auth::user()->prefix_name }}</span></div>
                                    <div class="user-info"><span class="lead-text">{{ Auth::user()->full_name }}</span><span class="sub-text">{{ Auth::user()->email }}</span></div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <a href="{{ route('admin.profile') }}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <a href="javascript:$('#logout_form').submit();"><em class="icon ni ni-signout"></em><span>Sign out</span></a>
                                        <form id="logout_form" action="{{ route('logout') }}" method="post">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
