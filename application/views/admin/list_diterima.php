  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Daftar Pemohon Informasi Publik yang Diterima</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO.</th>
                  <th>OPD TUJUAN</th>
                  <th>NAMA PEMOHON</th>
                  <th>JENIS KELAMIN</th>
                  <th>USIA</th>
                  <th>SCAN KTP</th>
                  <th>ALAMAT</th>
                  <th>TELEPON</th>
                  <th>FAX</th>
                  <th>EMAIL</th>
                  <th>INFORMASI YANG DIMINTA</th>
                  <th>ALASAN</th>
                  <th>TINDAK LANJUT</th>
                  <th>TANGGAL/WAKTU PERMOHONAN</th>
                  <th>STATUS</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach ($diterima as $row => $r) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $r->nama_opd; ?></td>
                  <td><?php echo $r->nama_pemohon; ?></td>
                  <td><?php echo $r->jenis_kelamin; ?></td>
                  <td><?php echo $r->usia; ?></td>
                  <td><img src="<?php echo base_url('/scan/'.$r->scan_ktp); ?>" class="img img-responsive img-thumbnail" width="60"></td>
                  <td><?php echo $r->alamat; ?></td>
                  <td><?php echo $r->telepon; ?></td>
                  <td><?php echo $r->fax; ?></td>
                  <td><?php echo $r->email; ?></td>
                  <td><?php echo $r->informasi_diminta; ?></td>
                  <td><?php echo $r->alasan; ?></td>
                  <td><?php echo $r->tindak_lanjut; ?></td>
                  <td><?php echo $r->tanggal_post; ?></td>
                  <td><?php echo $r->status;?></td>
                  <td><a href="<?php echo site_url('admin/v_pipid/').$r->id_pip?>"><button class="btn btn-primary btn-xs"><i class="fa fa-print"></i> Cetak</button></a></td>
                </tr>
                <?php } ?>
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->