<div class="nk-sidebar nk-sidebar-fixed" data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('admin.index') }}" class="logo-link nk-sidebar-logo">
                <h3>LMS</h3>
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
                        <a href="{{ route('admin.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span><span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.courses.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-book-fill"></em></span><span class="nk-menu-text">Courses</span>
                        </a>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-fill"></em></span><span class="nk-menu-text">Instructors</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="/demo2/lms/instructor-dashborad.html" class="nk-menu-link"><span class="nk-menu-text">Instructor Overview</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/demo2/lms/instructor-list.html" class="nk-menu-link"><span class="nk-menu-text">Instructor List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/demo2/lms/instructor-details.html" class="nk-menu-link"><span class="nk-menu-text">Instructor Details</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/demo2/lms/instructor-payment.html" class="nk-menu-link"><span class="nk-menu-text">Instructor Payment</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/demo2/lms/students.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span><span class="nk-menu-text">Students</span>
                        </a>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-property-add"></em></span><span class="nk-menu-text">Enrolment</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="/demo2/lms/enroll-history.html" class="nk-menu-link"><span class="nk-menu-text">Enroll History</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/demo2/lms/enroll-student.html" class="nk-menu-link"><span class="nk-menu-text">Enroll a Student</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/demo2/lms/message.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-chat-fill"></em></span><span class="nk-menu-text">Messages</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/demo2/lms/admin-profile.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span><span class="nk-menu-text">Admin profile</span>
                        </a>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span><span class="nk-menu-text">Invoice</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="/demo2/lms/student-invoice-list.html" class="nk-menu-link"><span class="nk-menu-text">Invoice List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/demo2/lms/student-invoice-details.html" class="nk-menu-link"><span class="nk-menu-text">Invoice Details</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/demo2/lms/settings.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-alt-fill"></em></span><span class="nk-menu-text">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
