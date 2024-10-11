<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboard</li>
                <li>
                    <!-- <a href="index.html" class="mm-active"> -->
                    <a href="<?= base_url() ?>">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>                                    
                <li class="app-sidebar__heading">Master</li>
                <li>
                    <a href="<?= base_url('project') ?>">
                        <i class="metismenu-icon pe-7s-airplay">
                        </i>Project
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('bank') ?>">
                        <i class="metismenu-icon pe-7s-graph2">
                        </i>Bank
                    </a>
                </li>                
                <li>
                    <a href="<?= base_url('sub_klasifikasi') ?>">
                        <i class="metismenu-icon pe-7s-display2">
                        </i>Sub Klasifikasi
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('klasifikasi') ?>">
                        <i class="metismenu-icon pe-7s-display1">
                        </i>Klasifikasi
                    </a>
                </li>
                <li class="app-sidebar__heading">Akun</li>
                <li>
                    <a href="<?= base_url('admin') ?>">
                        <i class="metismenu-icon pe-7s-users">
                        </i>Admin
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>