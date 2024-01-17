<div class="vertical-menu">
    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index.html" key="t-default">Default</a></li>
                        <li><a href="dashboard-saas.html" key="t-saas">Saas</a></li>
                        <li><a href="dashboard-crypto.html" key="t-crypto">Crypto</a></li>
                        <li><a href="dashboard-blog.html" key="t-blog">Blog</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase-alt-2"></i>
                        <span key="t-projects">Projects</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.project.index') }}" key="t-p-grid">Projects Grid</a></li>
                        <li><a href="{{ route('admin.project.index') }}" key="t-p-list">Projects List</a></li>
                        <li><a href="projects-overview.html" key="t-p-overview">Project Overview</a></li>
                        <li><a href="{{ route('admin.project.create') }}" key="t-create-new">Create New</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase-alt-2"></i>
                        <span key="t-vendor">Vendor</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.project.index') }}" key="t-p-grid">Vendor Grid</a></li>
                        <li><a href="{{ route('admin.vendor.index') }}" key="t-p-list">Vendor List</a></li>
                        <li><a href="projects-overview.html" key="t-p-overview">Project Overview</a></li>
                        <li><a href="{{ route('admin.vendor.create') }}" key="t-create-new">Create New</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>