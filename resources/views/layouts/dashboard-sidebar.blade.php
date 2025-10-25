<div class="sidebar" data-background-color="dark">
    <div class="py-4 sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{ route('dashboard') }}" class=" logo">
                {{-- <img src="{{ asset('assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand"
                    height="20" /> --}}
                <img src="{{ asset('images/logo.png') }}" alt="Flavios Logo" height="70">

            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Website Manager</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-th-list"></i>
                        <p>Category</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('categories.index') }}">
                                    <span class="sub-item">View</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Menu</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('menus.index') }}">
                                    <span class="sub-item">View</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#weekly">
                        <i class="fas fa-layer-group"></i>
                        <p>Weekly Menu</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="weekly">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('weekly-menus.index') }}">
                                    <span class="sub-item">View</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#feedback">
                        <i class="fas fa-layer-group"></i>
                        <p>Feedbacks</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="feedback">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('feedback.index') }}">
                                    <span class="sub-item">View</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#links">
                        <i class="fas fa-layer-group"></i>
                        <p>Social Links</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="links">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('social-links.index') }}">
                                    <span class="sub-item">View</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#private-information">
                        <i class="fas fa-layer-group"></i>
                        <p>Private Information</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="private-information">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('private-information.index') }}">
                                    <span class="sub-item">View</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
