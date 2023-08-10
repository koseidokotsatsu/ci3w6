<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="#" class="text-nowrap logo-img">
                <img src="<?= base_url(); ?>assets/images/logos/dark-logo.png" width="180" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item active">
                    <a class="sidebar-link" href="<?= base_url('dashboard') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">MENU</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= base_url(); ?>layanan" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Layanan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= base_url(); ?>dokter" aria-expanded="false">
                        <span>
                            <i class="ti ti-users"></i>
                        </span>
                        <span class="hide-menu">Dokter/Spesialis</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= base_url(); ?>jadwal" aria-expanded="false">
                        <span>
                            <i class="ti ti-cards"></i>
                        </span>
                        <span class="hide-menu">Jadwal</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= base_url('pengguna'); ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-file-description"></i>
                        </span>
                        <span class="hide-menu">Pengguna</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= base_url('antrian'); ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-typography"></i>
                        </span>
                        <span class="hide-menu">Antrian</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">PENGATURAN</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#" aria-expanded="false">
                        <span>
                            <i class="ti ti-login"></i>
                        </span>
                        <span class="hide-menu">Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->