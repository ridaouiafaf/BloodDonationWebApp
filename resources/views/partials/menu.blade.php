<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            @can('post_access')
            <li class="nav-item">
                <a href="{{ route("admin.posts.index") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt text-success">

                    </i>
                    News Feed
                </a>
            </li>
            @endcan
            @can('link_access')
            <li class="nav-item">
                <a href="{{ route("admin.links.index") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt text-success">

                    </i>
                    Beneficial Links
                </a>
            </li>
            @endcan
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle " href="#">
                        <i class="fa-fw fas fa-users nav-icon text-success">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon text-success">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon text-success">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon text-success">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('service_access')
                <li class="nav-item">
                    <a href="{{ route("admin.services.index") }}" class="nav-link {{ request()->is('admin/services') || request()->is('admin/services/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon text-success">

                        </i>
                        {{ trans('cruds.service.title') }}
                    </a>
                </li>
            @endcan
            @can('employee_access')
                <li class="nav-item">
                    <a href="{{ route("admin.employees.index") }}" class="nav-link {{ request()->is('admin/employees') || request()->is('admin/employees/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon text-success">

                        </i>
                        {{ trans('cruds.employee.title') }}
                    </a>
                </li>
            @endcan
            @can('patient_access')
                <li class="nav-item">
                    <a href="{{ route("admin.patients.index") }}" class="nav-link {{ request()->is('admin/patients') || request()->is('admin/patients/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon text-success">

                        </i>
                        {{ trans('cruds.patient.title') }}
                    </a>
                </li>
            @endcan
            @can('appointment_access')
                <li class="nav-item">
                    <a href="{{ route("admin.appointments.index") }}" class="nav-link {{ request()->is('admin/appointments') || request()->is('admin/appointments/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon text-success">

                        </i>
                        {{ trans('cruds.appointment.title') }}
                    </a>
                </li>
            @endcan
            <li class="nav-item">
                <a href="{{ route("admin.systemCalendar") }}" class="nav-link {{ request()->is('admin/system-calendar') || request()->is('admin/system-calendar/*') ? 'active' : '' }}">
                    <i class="nav-icon fa-fw fas fa-calendar text-success">

                    </i>
                    {{ trans('global.systemCalendar') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt text-success">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    {{-- <button class="sidebar-minimizer brand-minimizer" type="button"></button> --}}
</div>