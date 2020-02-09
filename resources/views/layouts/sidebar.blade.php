<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">Menus</li>
        <li class="nav-item">
            <a href="{{URL::to('dashboard')}}" class="nav-link {{ Request::segment(1) === 'dashboard' ? 'active' : null }}">
                <i class="nav-icon fa fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{URL::to('employees')}}" class="nav-link {{ Request::segment(1) === 'employees' ? 'active' : null }}">
                <i class="nav-icon fas fa-users"></i>
                <p>Employees</p>
            </a>
        </li>
    </ul>
</nav>