<div class="nk-sidebar nk-sidebar-fixed" data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('admin.index') }}" class="logo-link nk-sidebar-logo">
                <h3>eduApp</h3>
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.index') }}" class="nk-menu-link {{ request()->routeIs('admin.index.*') ? 'active' : '' }}">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span><span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.courses.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-book-fill"></em></span><span class="nk-menu-text">Available Courses</span>
                        </a>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-property-add"></em></span><span class="nk-menu-text">Assignments</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.assignments.index') }}" class="nk-menu-link"><span class="nk-menu-text">View Assignment</span></a>
                            </li>
                            @if(Auth::user()->hasAnyRole(['instructor']))
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.student-assignments.index') }}" class="nk-menu-link"><span class="nk-menu-text">Review Assignment</span></a>
                            </li>
                            @endif
                        </ul>
                    </li>

                    <li class="nk-menu-item">
                        <a href="{{ route('admin.progress') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span><span class="nk-menu-text">Progress Tracking</span>
                        </a>
                    </li>
                    @if(Auth::user()->hasAnyRole(['student']))
                        <li class="nk-menu-item">
                            <a href="{{ route('admin.grades') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span><span class="nk-menu-text">View Grades</span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="{{ route('admin.feedback.create') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-setting-alt-fill"></em></span><span class="nk-menu-text">Feedback</span>
                            </a>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
</div>
