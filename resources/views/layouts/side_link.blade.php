<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
            <img src="{{url('/images/upload/demo_logo.jpeg')}}"
                alt="Demo Logo"
                class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">Demo</span>
          </a>
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Menus</li>

                <li class="nav-item">
                  <a href="{{URL::to('dashboard')}}" class="nav-link {{ Request::segment(1) === 'dashboard' ? 'active' : null }}">
                    <i class="nav-icon fa fa-dashboard"></i>
                    <p>Dashboard</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{URL::to('allemployee')}}" class="nav-link {{ Request::segment(1) === 'allemployee' ? 'active' : null }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Employee</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{URL::to('allsalary')}}" class="nav-link {{ Request::segment(1) === 'allsalary' ? 'active' : null }}">
                    <i class="nav-icon fa fa-inr"></i>
                    <p>Salary</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{URL::to('allmaster')}}" class="nav-link {{ Request::segment(1) === 'allmaster' ? 'active' : null }}">
                    <i class="nav-icon fa fa-plus-square"></i>
                    <p>Master</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{URL::to('salaryemail')}}" class="nav-link {{ Request::segment(1) === 'salaryemail' ? 'active' : null }}">
                    <i class="nav-icon fa fa-paper-plane"></i>
                    <p> Salary Slip Email</p>
                  </a>
                </li>

              </ul>
            </nav>
          
          </div>
   
  </aside>


  