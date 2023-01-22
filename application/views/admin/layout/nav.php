 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/images/logo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data IP</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo site_url('admin/index'); ?>"><i class="fa fa-table"></i> List</a></li>
             <li><a href="<?php echo site_url('admin/tambah'); ?>"><i class="fa fa-plus"></i> Tambah IP</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Data PIP</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo site_url('admin/list'); ?>"><i class="fa fa-table"></i> List</a></li>
            <li class=""><a href="<?php echo site_url('admin/list_diterima'); ?>"><i class="fa fa-table"></i> List Diterima</a></li>
            <li class=""><a href="<?php echo site_url('admin/list_ditolak'); ?>"><i class="fa fa-table"></i> List Ditolak</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-warning"></i> <span>Data Pernyataan Keberatan</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo site_url('admin/list_keberatan'); ?>"><i class="fa fa-table"></i> List</a></li>
            <li class=""><a href="<?php echo site_url('admin/list_diterima2'); ?>"><i class="fa fa-table"></i> List Diterima</a></li>
            <li class=""><a href="<?php echo site_url('admin/list_ditolak2'); ?>"><i class="fa fa-table"></i> List Ditolak</a></li>
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
