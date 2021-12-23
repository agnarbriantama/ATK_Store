<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('user_buku'); ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-university"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ATK Store</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user_buku'); ?>">
                    <i class="fas fa-fw fa-book text-light"></i></i>
                    <span>Data Buku</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user_pensil'); ?>">
                    <i class="fas fa-fw fa-pen text-light"></i>
                    <span>Data Pensil</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user_bolpoin'); ?>">
                    <i class="fas fa-fw fa-pen-alt text-light"></i>
                    <span>Data Bolpoin</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user_pewarna'); ?>">
                    <i class="fas fa-fw fa-palette text-light"></i>
                    <span>Data Pewarna</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('grafikcontroller'); ?>">
                    <i class="fas fa-fw fa-chart-bar text-light"></i>
                    <span>Grafik</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('belanja'); ?>">
                    <i class="fas fa-fw fa-wallet text-light"></i>
                    <span>Riwayat Transaksi</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('auth/logout'); ?>">
                    <i class="fas fa-fw fa-sign-out-alt text-light"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>




                        <?php $keranjang = $this->cart->contents();
                        $jml_item = 0;
                        foreach ($keranjang as $key => $value) {
                            $jml_item = $jml_item + $value['qty'];
                            # code...
                        }
                        ?>
                        <!-- Nav Item - Keranjang -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter"><?= $jml_item ?></span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <!-- barang start -->

                                <h6 class="dropdown-header">
                                    Keranjang Belanja
                                </h6>
                                <?php foreach ($keranjang as $key => $value) { ?>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate"><?= $value['name'] ?></div>
                                            <div class="small">Jumlah : <?= $value['qty'] ?> X Rp.<?= number_format($value['price'], 00) ?> </div>
                                            <div class="small"><i class="fas fa-calculator"></i> Rp.<?= $this->cart->format_number($value['subtotal']) ?></div>
                                        </div>
                                    </a>
                                <?php } ?>
                                <tr>
                                    <td colspan="2"> </td>
                                    <td class="right"><strong>Total : </strong></td>
                                    <td class="right">Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></td>
                                </tr>
                                <a href="<?php echo base_url('belanja'); ?>" class="dropdown-item text-center small text-gray-500" href="#">View Cart</a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Checkout</a>

                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->