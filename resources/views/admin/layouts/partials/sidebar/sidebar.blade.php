<div id="sidebar-main" class="sidebar sidebar-default">
    <div class="sidebar-content">
        <ul class="navigation">
            <li class="navigation-header">
                <span>Main</span>
                <i class="icon-menu"></i>
            </li>

            <li>
                <a href="{{ url('/admin/dashboard') }}">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-home"></i>
                    <span>Home</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-key"></i>
                    <span>Ubah Password</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-pencil"></i>
                    <span>Layanan</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('/admin/layanan') }}">Layanan</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-pencil"></i>
                    <span>Akun</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('/admin/akun/role') }}">Role</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
