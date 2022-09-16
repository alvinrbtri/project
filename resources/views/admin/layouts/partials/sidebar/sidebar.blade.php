<div id="sidebar-main" class="sidebar sidebar-default">
    <div class="sidebar-content">
        <ul class="navigation">
            <li class="navigation-header">
                <span>Main</span>
                <i class="icon-menu"></i>
            </li>

            <li>
                <a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a>
            </li>

            <li>
                <a href="{{ url('/admin/home') }}">
                    <i class="fa fa-home"></i>
                    <span>Home</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/admin/profile') }}">
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
                    <li>
                        <a href="input_groups.html">Sub Layanan</a>
                    </li>
                    <li><a href="layout_horizontal.html">Horizontal Layout</a></li>
                    <li><a href="layout_vertical.html">Vertical Layout</a></li>
                </ul>
            </li>

            <li class="navigation-header">
                <span>Forms</span>
                <i class="icon-menu"></i>
            </li>

            <li>
                <a href="index.html"><i class="fa fa-pencil"></i> <span>Form Elements</span></a>
                <ul>
                    <li><a href="inputs.html">Inputs</a></li>
                    <li><a href="input_groups.html">Input Groups</a></li>
                    <li><a href="layout_horizontal.html">Horizontal Layout</a></li>
                    <li><a href="layout_vertical.html">Vertical Layout</a></li>
                </ul>
            </li>

            <li>
                <a href="index.html"><i class="fa fa-th"></i> <span>Components</span></a>
                <ul>
                    <li><a href="components_buttons.html">Buttons</a></li>
                    <li><a href="components_dropdowns.html">Dropdown Menus</a></li>
                    <li><a href="components_navs.html">Tabs, Accordions &amp; Navs</a></li>
                    <li><a href="components_badges.html">Labels &amp; Badges</a></li>
                    <li><a href="components_alerts.html">Alerts</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ url('/admin/setting') }}">
                    <i class="fa fa-home"></i>
                    <span>Setting</span>
                </a>
            </li>

        </ul>
    </div>
</div>
