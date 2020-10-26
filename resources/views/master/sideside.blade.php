<div class="sidebar-wrapper">
    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png"
                alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
    </div>
    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png"
                alt=""></a></div>
    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
            <ul class="sidebar-links custom-scrollbar">
                <li class="back-btn"><a href="index.html"><img class="img-fluid"
                            src="../assets/images/logo/logo-icon.png" alt=""></a>
                    <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2"
                            aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6 class="lan-1">General</h6>
                        <p class="lan-2">Dashboards,widgets & layout.</p>
                    </div>
                </li>
                <li class="sidebar-list">
                    <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title" href="#"><i
                            data-feather="home"></i><span class="lan-3">Dashboard </span></a>
                    <ul class="sidebar-submenu">
                        <li><a class="lan-4" href="index.html">Default</a></li>
                        <li><a class="lan-5" href="dashboard-02.html">Ecommerce</a></li>
                    </ul>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6 class="lan-8">Applications</h6>
                        <p class="lan-9">Ready to use Apps</p>
                    </div>
                </li>
                <li class="sidebar-list">
                    <label class="badge badge-danger">New</label><a class="sidebar-link sidebar-title" href="#"><i
                            data-feather="box"></i><span>Produk</span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{route('produk')}}">Vaksin</a></li>
                        <li><a href="projectcreate.html">Antigen</a></li>
                        <li><a href="projectcreate.html">Antisera</a></li>
                        <li><a href="projectcreate.html">Kit Elisa</a></li>
                    </ul>
                </li>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                        href="{{route('pengemasan')}}"><i data-feather="package"> </i><span>Pengemasan</span></a></li>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('ongkir')}}"><i
                            data-feather="truck"> </i><span>Ongkos Kirim</span></a></li>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('status')}}"><i
                            data-feather="flag"> </i><span>Status Barang</span></a></li>
            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
</div>
