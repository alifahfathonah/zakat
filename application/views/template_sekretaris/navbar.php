<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-heart"></i> <span>Zakat Online</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url('') ?>assets/template/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo  $lengkap; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url('sekretaris/Dashboard') ?>"><i class="fa fa-home"></i> Dashboard </a>
                  </li>

                  <li><a href="<?php echo base_url('sekretaris/fitrah') ?>"><i class="fa  fa-heart"></i> Zakat Fitrah </a>
                  </li>

                  <li><a href="<?php echo base_url('sekretaris/maal') ?>"><i class="fa fa-money"></i> Zakat Mall </a>
                  </li>

                  <li><a href="<?php echo base_url('sekretaris/penerima') ?>"><i class="fa  fa-wheelchair"></i> Data Penerima Zakat </a>
                  </li>

                  <li><a href="<?php echo base_url('sekretaris/Laporan') ?>"><i class="fa fa-book"></i> Laporan Zakat </a>
                  </li>

                  <li><a href="<?php echo base_url('sekretaris/Setting/kop_laporan') ?>"><i class="fa fa-gear"></i> Setting Kop </a></li>

                  <li><a href="<?php echo base_url('sekretaris/Setting/master_kwitansi') ?>"><i class="fa fa-envelope"></i> Setting Kwitansi </a></li>

                  <!-- <li><a><i class="fa fa-gears"></i> Setting User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('sekretaris/Setting') ?>">User Petugas </a></li>
                      <li><a href="<?php echo base_url('sekretaris/Setting/user_koor') ?>">User Koordinator</a></li>
                    </ul>
                  </li> -->

                  <li><a href="<?php echo base_url('sekretaris/Setting/master_lokasi') ?>"><i class="fa fa-location-arrow"></i> Setting Lokasi </a></li>

                   <!-- <li><a href="#"><i class="fa fa-code"></i> Kriteria Penerima </a>
                  </li>

                  <li><a href="#"><i class="fa fa-calculator"></i> Perhitungan Metode AHP </a>
                  </li> -->
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings" href="<?php echo base_url('sekretaris/setting/ubah_sandi') ?>">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <!-- <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a> -->
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url('login/logout') ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url('') ?>assets/template/production/images/img.jpg" alt=""><?php echo  $lengkap; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo base_url('sekretaris/setting/ubah_sandi') ?>"><i class="fa fa-user pull-right"></i> Setting Profile</a></li>
                    <li><a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>