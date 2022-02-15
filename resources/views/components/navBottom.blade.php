<div class="nav-bottom">
    <div class="container" style="max-width: 1700px !important">
        <h3 class="title-menu d-flex d-lg-none">
            Menu
            <div class="close-menu"> <i class="flaticon-cross"></i></div>
        </h3>
        <ul class="nav page-navigation page-navigation-info bg-white">

            <li class="nav-item menu">
                <a class="nav-link" href="{{url('/dashboard')}}">
                    <i class="link-icon icon-screen-desktop text-danger"></i>
                    <span class="menu-title">Beranda</span>
                </a>
            </li>

            <li class="nav-item submenu" id="nav-mou">
                <a class="nav-link" href="#">
                    <i class="link-icon icon-docs text-danger"></i>
                    <span class="menu-title">Sub-Menu</span>
                </a>
                <div class="navbar-dropdown animated fadeIn">
                    <ul>
                        <li>
                            <a href="{{url('/')}}">1</a>
                        </li>
                        <li>
                            <a href="{{url('/')}}">2</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item submenu" id="nav-master">
                <a class="nav-link" href="#">
                    <i class="link-icon icon-grid text-danger"></i>
                    <span class="menu-title">Master</span>
                </a>
                <div class="navbar-dropdown animated fadeIn">
                    <ul>
                        <li>
                            <a href="{{url('profile')}}">Profil</a>
                        </li>
                        <li>
                            <a href="{{url('user')}}">Pengguna</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
