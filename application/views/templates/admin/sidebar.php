<!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url("assets/") ?>images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata("namauser") ?></div>
                    <!-- <div class="email">john.doe@example.com</div> -->
                    <div class="btn-group user-helper-dropdown">
                        <i class="fa fa-th" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#ubah_password"><i class="fa fa-lock"></i>Ubah kata sandi</a></li>
                            <li><a href="<?php echo base_url("init/logout") ?>"><i class="fa fa-sign-out"></i>Keluar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header"></li>
                    <li class="active">
                        <a href="<?php echo base_url('admin/p/home') ?>">
                            <i class="fa fa-home fa-fw fa-2x"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="<?php echo base_url('admin/p/menu_resto') ?>">
                            <i class="fa fa-calendar-minus-o fa-fw fa-2x"></i>
                            <span>Menu Restoran</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="<?php echo base_url('admin/p/transaksi') ?>">
                            <i class="fa fa-money fa-fw fa-2x"></i>
                            <span>Transaksi</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="<?php echo base_url('admin/p/pesanan') ?>">
                            <i class="fa fa-shopping-cart fa-fw fa-2x"></i>
                            <span>Pesanan</span>
                        </a>
                    </li>

                   
                

                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; <?= date("Y") ?> <a href="javascript:void(0);">Warmindo Pojokan</a>.
                </div>
             
            </div>
        </aside>
    
     
 
    </section>