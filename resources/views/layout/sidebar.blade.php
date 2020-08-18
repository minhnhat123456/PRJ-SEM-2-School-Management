<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile not-navigation-link">
            <div class="nav-link">
                <div class="user-wrapper">
                    <div class="profile-image">
                        <img src="{{ session()->get('user-image') ? asset(session()->get('user-image')) : asset('assets/images/faces-clipart/pic-1.png') }}"
                            alt="profile image">
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">{{ session()->get('user') }}</p>
                        <div class="dropdown" data-display="static">
                            <a href="#" class="nav-link d-flex user-switch-dropdown-toggler" id="UsersettingsDropdown"
                                href="#" data-toggle="dropdown" aria-expanded="false">
                                <small class="designation text-muted">Active</small>
                                <span class="status-indicator online"></span>
                            </a>
                            {{-- <div class="dropdown-menu"
                                aria-labelledby="UsersettingsDropdown">
                                <a class="dropdown-item p-0">
                                    <div class="d-flex border-bottom">
                                        <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                            <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                                        </div>
                                        <div
                                            class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                                            <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                                        </div>
                                        <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                            <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item mt-2"> Manage Accounts </a>
                                <a class="dropdown-item"> Change Password </a>
                                <a class="dropdown-item"> Check Inbox </a>
                                <a class="dropdown-item"> Sign Out </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                {{-- <button class="btn btn-success btn-block">Tạo mới <i
                        class="mdi mdi-plus"></i></button> --}}
            </div>
        </li>
        <li class="nav-item {{ active_class(['/']) }}">
            <a class="nav-link" href="{{ url('/') }}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item {{ active_class(['user-pages/manage-account']) }}">
            <a class="nav-link" href="{{ url('user-pages/manage-account') }}">
                <i class="menu-icon mdi mdi-account-card-details"></i>
                <span class="menu-title">Manage Account</span>
            </a>
        </li>
        @if (session()->get('role') == 1)
            <li class="nav-item {{ active_class(['user-pages/teacher/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#teacher"
                    aria-expanded="{{ is_active_route(['user-pages/teacher/*']) }}" aria-controls="teacher">
                    <i class="menu-icon mdi mdi-account-multiple"></i>
                    <span class="menu-title">Teacher Management</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse {{ show_class(['user-pages/teacher/*']) }}" id="teacher">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item {{ active_class(['user-pages/teacher/list']) }}">
                            <a class="nav-link" href="{{ url('user-pages/teacher/list') }}">List Teacher</a>
                        </li>
                    </ul>
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item {{ active_class(['user-pages/teacher/add']) }}">
                            <a class="nav-link" href="{{ url('user-pages/teacher/add') }}">Add Teacher</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ active_class(['user-pages/student/*']) }}">
                <a class="nav-link" data-toggle="collapse" href="#student"
                    aria-expanded="{{ is_active_route(['user-pages/student/*']) }}" aria-controls="student">
                    <i class="menu-icon mdi mdi-account-multiple"></i>
                    <span class="menu-title">Student Management</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse {{ show_class(['user-pages/student/*']) }}" id="student">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item {{ active_class(['user-pages/student/list']) }}">
                            <a class="nav-link" href="{{ url('user-pages/student/list') }}">List Student</a>
                        </li>
                    </ul>
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item {{ active_class(['user-pages/student/add']) }}">
                            <a class="nav-link" href="{{ url('user-pages/student/add') }}">Add Student</a>
                        </li>
                    </ul>
                </div>
            </li>
        @else

        @endif
        <!--    <li class="nav-item {{ active_class(['basic-ui/*']) }}">
              <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">
                <i class="menu-icon mdi mdi-dna"></i>
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse {{ show_class(['basic-ui/*']) }}" id="basic-ui">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['basic-ui/buttons']) }}">
                    <a class="nav-link" href="{{ url('/basic-ui/buttons') }}">Buttons</a>
                  </li>
                  <li class="nav-item {{ active_class(['basic-ui/dropdowns']) }}">
                    <a class="nav-link" href="{{ url('/basic-ui/dropdowns') }}">Dropdowns</a>
                  </li>
                  <li class="nav-item {{ active_class(['basic-ui/typography']) }}">
                    <a class="nav-link" href="{{ url('/basic-ui/typography') }}">Typography</a>
                  </li>
                </ul>
              </div>
            </li>-->

        <!--    <li class="nav-item {{ active_class(['charts/chartjs']) }}">
              <a class="nav-link" href="{{ url('/charts/chartjs') }}">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">Charts</span>
              </a>
            </li>
            <li class="nav-item {{ active_class(['tables/basic-table']) }}">
              <a class="nav-link" href="{{ url('/tables/basic-table') }}">
                <i class="menu-icon mdi mdi-table-large"></i>
                <span class="menu-title">Tables</span>
              </a>
            </li>
            <li class="nav-item {{ active_class(['icons/material']) }}">
              <a class="nav-link" href="{{ url('/icons/material') }}">
                <i class="menu-icon mdi mdi-emoticon"></i>
                <span class="menu-title">Icons</span>
              </a>
            </li>-->
        {{-- <li class="nav-item {{ active_class(['product/*']) }}">
            <a class="nav-link" data-toggle="collapse" href="#product-pages">
                <i class="menu-icon mdi mdi-lock-outline"></i>
                <span class="menu-title">Sản phẩm</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ show_class(['user-pages/*']) }}" id="product-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ active_class(['product']) }}">
                        <a class="nav-link" href="{{ url('/product') }}">Danh sách sản phẩm</a>
                    </li>
                    <li class="nav-item {{ active_class(['product/create']) }}">
                        <a class="nav-link" href="{{ url('/product/create') }}">Tạo mới sản phẩm</a>
                    </li>

                </ul>
            </div>
        </li> --}}
        {{-- <li class="nav-item {{ active_class(['user-pages/*']) }}">
            <a class="nav-link" data-toggle="collapse" href="#user-pages"
                aria-expanded="{{ is_active_route(['user-pages/*']) }}" aria-controls="user-pages">
                <i class="menu-icon mdi mdi-lock-outline"></i>
                <span class="menu-title">Tài khoản</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ show_class(['user-pages/*']) }}" id="user-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ active_class(['user-pages/login']) }}">
                        <a class="nav-link" href="{{ url('/user-pages/login') }}">Login</a>
                    </li>
                    <li class="nav-item {{ active_class(['user-pages/register']) }}">
                        <a class="nav-link" href="{{ url('/user-pages/register') }}">Register</a>
                    </li>
                    <li class="nav-item {{ active_class(['user-pages/lock-screen']) }}">
                        <a class="nav-link" href="{{ url('/user-pages/lock-screen') }}">Lock Screen</a>
                    </li>
                </ul>
            </div>
        </li> --}}

    </ul>
</nav>
