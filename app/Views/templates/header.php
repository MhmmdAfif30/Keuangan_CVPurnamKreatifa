<div class="app-header header-shadow">
    <div class="app-header__logo">
        <h3 class="my-auto mr-3 fa">Keuangan</h3>
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
    <div class="app-header__content">                    
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group mr-2">
                                <div class="widget-heading">
                                    <!-- <?
                                    $session = session();
                                    echo $session->get('username'); ?> -->
                                    Dashboard Admin
                                </div>
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                    <!-- <a href="<?= base_url("admin/ubah/") ?>" type="button" tabindex="0" class="dropdown-item">Update</a> -->
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <a href="<?= base_url("logout") ?>" type="button" tabindex="0" class="dropdown-item">Logout</a>
                                </div>
                            </div>
                        </div>                                    
                    </div>
                </div>
            </div>        
        </div>
    </div>            
</div>        