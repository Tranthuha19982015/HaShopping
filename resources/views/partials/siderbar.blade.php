<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link">
                        <i class="fas fa-list-alt"></i>
                        <p>
                            Danh mục sản phẩm
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('product.index') }}" class="nav-link">
                        <i class="fab fa-product-hunt"></i>
                        <p>
                            Sản phẩm
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('slider.index')}}" class="nav-link">
                        <i class="fas fa-sliders-h"></i>
                        <p>
                            Slider
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('users.index')}}" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p>
                            Danh sách nhân viên
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('roles.index')}}" class="nav-link">
                        <i class="fab fa-critical-role"></i>
                        <p>
                            Danh sách vai trò
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('permissions.create')}}" class="nav-link">
                        {{--                        <i class="nav-icon fas fa-th"></i>--}}
                        <p>
                            Tạo dữ liệu bảng Permission
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
