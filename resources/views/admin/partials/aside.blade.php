<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('index') }}" class="brand-link">
        <img src="{{ URL::to('/') }}/images/icons/logo1.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">GTOnline</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::guard('admin')->user()->name}}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Quản lý
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('users.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Quản lý trang
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('canhbao.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cảnh báo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('theloai.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thể Loại</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('loaitin.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Loại tin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('tintuc.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tin tức</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('luat.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Luật giao thông</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.logout') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>