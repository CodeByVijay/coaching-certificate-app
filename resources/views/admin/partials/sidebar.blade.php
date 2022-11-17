<div class="page-content d-flex align-items-stretch">
    <!-- Side Navbar -->
    <nav class="side-navbar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{ asset('assets/admin/img/bhupendra.png') }}" alt="..."
                    class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h4">{{ auth()->user()->name }}</h1>
                <p>Web Designer</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
            <li class="{{ request()->is('admin') ? 'active' : '' }}"><a href="{{ route('dashboard') }}"> <i
                        class="icon-home"></i>Home </a></li>
            <li class="{{ request()->is('admin/new-students*') ? 'active' : '' }}"><a href="{{ route('NewStudents') }}">
                    <i class="icon-grid"></i>New Student </a></li>
            <li class="{{ request()->is('admin/student-message*') ? 'active' : '' }}"><a
                    href="{{ route('StudentMessage') }}"> <i class="fa fa-bar-chart"></i>Student Message </a></li>
            <li class="{{ request()->is('admin/student-registration*') ? 'active' : '' }}"><a
                    href="{{ route('StudentRegistration') }}"> <i class="icon-padnote"></i>Student Registration </a>
            </li>

            <li
                class="{{ request()->is('admin/all-enroll-student*') || request()->is('admin/not-issue-certificate*') || request()->is('admin/issued-certificate*') ? 'active' : '' }}">
                <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
                        class="icon-interface-windows"></i>Enrolled Student </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li class="{{ request()->is('admin/all-enroll-student*') ? 'active' : '' }}"><a
                            href="{{ route('AllEnrollStudent') }}">All Enrolled Student </a></li>
                    <li class="{{ request()->is('admin/not-issue-certificate*') ? 'active' : '' }}"><a
                            href="{{ route('NotIssueCertificate') }}">Not Issue Certificate </a></li>
                    <li class="{{ request()->is('admin/issued-certificate*') ? 'active' : '' }}"><a
                            href="{{ route('IssuedCertificate') }}">Issue Certificate </a></li>
                </ul>
            </li>

            <li class="{{ request()->is('admin/profile_update*') ? 'active' : '' }}"><a
                href="{{ route('profileUpdate') }}"> <i class="icon-padnote"></i>Profile</a>
        </li>
        </ul>

    </nav>
