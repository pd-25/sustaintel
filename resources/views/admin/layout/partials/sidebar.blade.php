<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('admin.dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>



        <li class="nav-item {{ Route::is('jobs.index') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('jobs.index') }}">
                <i class="ri-group-fill"></i>
                <span>Jobs</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Applications</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav"
                class="nav-content collapse {{ Route::is('register-bookings.index') || Route::is('booking-types.index') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a class="{{ Route::is('admin.getApplication', config('core.INTERN')) ? 'active' : '' }}"
                        href="{{ route('admin.getApplication', config('core.INTERN')) }}">
                        <i class="ri-group-fill"></i>
                        <span>Internship</span>
                    </a>
                </li>

                <li class="">
                    <a class="{{ Route::is('admin.getApplication', config('core.PERMNT')) ? 'active' : '' }}"
                        href="{{ route('admin.getApplication', config('core.PERMNT')) }}">
                        <i class="ri-group-fill"></i>
                        <span>Permanent</span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item {{ Route::is('blogs.index') ? 'active' : '' }}">
            <a class="nav-link " href="{{route('blogs.index')}}">
                <i class="ri-group-fill"></i>
                <span>Blogs</span>
            </a>
        </li>

        <li class="nav-item {{ Route::is('case-studies.index') ? 'active' : '' }}">
            <a class="nav-link " href="{{route('case-studies.index')}}">
                <i class="ri-group-fill"></i>
                <span>Case Study</span>
            </a>
        </li>

        <li class="nav-item {{ Route::is('news-events.index') ? 'active' : '' }}">
            <a class="nav-link " href="{{route('news-events.index')}}">
                <i class="ri-group-fill"></i>
                <span>News & Events</span>
            </a>
        </li>
        

        
    </ul>

</aside>



{{--  <li class="nav-item {{ Route::is('members.index') ? 'active' : ''}}">
            <a class="nav-link " href="{{route('members.index')}}">
                <i class="ri-group-fill"></i>
                <span>Members</span>
            </a>
        </li> --}}
