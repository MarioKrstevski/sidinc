<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/permissions*') ? 'menu-open' : '' }} {{ request()->is('admin/roles*') ? 'menu-open' : '' }} {{ request()->is('admin/users*') ? 'menu-open' : '' }} {{ request()->is('admin/audit-logs*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('audit_log_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.audit-logs.index") }}" class="nav-link {{ request()->is('admin/audit-logs') || request()->is('admin/audit-logs/*') ? 'active' : '' }}">
                                        <i class="fa-fw nav-icon fas fa-file-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.auditLog.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('user_alert_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.user-alerts.index") }}" class="nav-link {{ request()->is('admin/user-alerts') || request()->is('admin/user-alerts/*') ? 'active' : '' }}">
                            <i class="fa-fw nav-icon fas fa-bell">

                            </i>
                            <p>
                                {{ trans('cruds.userAlert.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('transaction_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.transactions.index") }}" class="nav-link {{ request()->is('admin/transactions') || request()->is('admin/transactions/*') ? 'active' : '' }}">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.transaction.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('job_status_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.job-statuses.index") }}" class="nav-link {{ request()->is('admin/job-statuses') || request()->is('admin/job-statuses/*') ? 'active' : '' }}">
                            <i class="fa-fw nav-icon fas fa-battery-half">

                            </i>
                            <p>
                                {{ trans('cruds.jobStatus.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('job_access')
                    <li class="nav-item">
                        @if (in_array('admin', array(auth()->user()->roles())))
                        <a href="{{ route("admin.jobs.index") }}" class="nav-link {{ request()->is('admin/jobs') || request()->is('admin/jobs/*') ? 'active' : '' }}">
                            <i class="fa-fw nav-icon fas fa-user-md">

                            </i>
                            <p>
                                {{ trans('cruds.job.title') }}
                            </p>
                        </a>
                        @elseif (auth()->user()->hasRole('user'))
                            <a href="{{ route("users.jobs.my_jobs") }}" class="nav-link {{ request()->is('user/jobs') || request()->is('user/jobs/*') ? 'active' : '' }}">
                                <i class="fa-fw nav-icon fas fa-user-md">

                                </i>
                                <p>
                                    {{ trans('cruds.job.title') }}
                                </p>
                            </a>
                        @endif
                    </li>
                @endcan
                @can('badge_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.badges.index") }}" class="nav-link {{ request()->is('admin/badges') || request()->is('admin/badges/*') ? 'active' : '' }}">
                            <i class="fa-fw nav-icon fas fa-ribbon">

                            </i>
                            <p>
                                {{ trans('cruds.badge.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('category_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.categories.index") }}" class="nav-link {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}">
                            <i class="fa-fw nav-icon fas fa-tag">

                            </i>
                            <p>
                                {{ trans('cruds.category.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('tag_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.tags.index") }}" class="nav-link {{ request()->is('admin/tags') || request()->is('admin/tags/*') ? 'active' : '' }}">
                            <i class="fa-fw nav-icon fas fa-tags">

                            </i>
                            <p>
                                {{ trans('cruds.tag.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('wallet_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.wallets.index") }}" class="nav-link {{ request()->is('admin/wallets') || request()->is('admin/wallets/*') ? 'active' : '' }}">
                            <i class="fa-fw nav-icon fas fa-wallet">

                            </i>
                            <p>
                                {{ trans('cruds.wallet.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('task_access')
                    <li class="nav-item">
                         @if (auth()->user()->hasRole('admin'))
                    {{--     @auth('admin') --}}
                        <a href="{{ route("admin.tasks.index") }}" class="nav-link {{ request()->is('admin/tasks') || request()->is('admin/tasks/*') ? 'active' : '' }}">
                            <i class="fa-fw nav-icon fas fa-tasks">

                            </i>
                            <p>
                                {{ trans('cruds.task.title') }}
                            </p>
                        </a>
                         @elseif (auth()->user()->hasRole('user'))
                    {{--     @elseauth('user') --}}
                            <a href="{{ route("users.tasks.my_asks") }}" class="nav-link {{ request()->is('users/tasks') || request()->is('users/tasks/*') ? 'active' : '' }}">
                                <i class="fa-fw nav-icon fas fa-tasks">

                                </i>
                                <p>
                                    {{ trans('cruds.task.title') }}
                                </p>
                            </a>
                         @endif
                    {{--         @endauth --}}
                    </li>
                @endcan
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key nav-icon">
                                </i>
                                <p>
                                    {{ trans('global.change_password') }}
                                </p>
                            </a>
                        </li>
                    @endcan
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                                <i class="fas fa-fw fa-sign-out-alt nav-icon">

                                </i>
                                <p>
                                    {{ trans('global.logout') }}
                                </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
