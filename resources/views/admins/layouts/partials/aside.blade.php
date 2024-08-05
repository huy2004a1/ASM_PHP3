<nav class="navbar navbar-expand-sm navbar-default">
    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="dashboard.html"><i class="menu-icon fa fa-laptop"></i>Dashboard</a>
            </li>
            <li class="menu-title">Quản lý</li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list"></i>Danh mục</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-list-alt"></i><a href="{{ route('categories.index') }}">Danh sách danh mục</a></li>
                    <li><i class="fa fa-plus"></i><a href="category-add.html">Thêm danh mục</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-newspaper-o"></i>Tin tức</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-newspaper-o"></i><a href="{{ route('articles.index') }}">Danh sách tin tức</a></li>
                    <li><i class="fa fa-plus"></i><a href="news-add.html">Thêm tin tức</a></li>
                </ul>
            </li>
            <li>
                <a href="statistics.html"> <i class="menu-icon fa fa-bar-chart"></i>Thống kê</a>
            </li>
            <li>
                <a href="{{ route ('account.index') }}"> <i class="menu-icon fa fa-users"></i>Quản lý người dùng</a>
            </li>
            <li class="menu-title">Cài đặt</li>
            <li>
                <a href="settings.html"> <i class="menu-icon fa fa-cogs"></i>Cài đặt hệ thống</a>
            </li>
            <li>
                <a href="{{ route('index') }}"> <i class="menu-icon fa fa-sign-out"></i>Đăng xuất</a>
            </li>
        </ul>
    </div>
</nav>
