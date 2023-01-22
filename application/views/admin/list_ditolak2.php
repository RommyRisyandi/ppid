  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Daftar Pernyataan Keberatan yang Ditolak</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                
                <thead>
                <tr>
                  <th>NO.</th>
                  <th>TUJUAN PERMOHONAN INFORMASI</th>
                  <th>NAMA PEMOHON</th>
                  <th>ALAMAT PEMOHON</th>
                  <th>PEKERJAAN PEMOHON</th>
                  <th>NO.HP PEMOHON</th>
                  <th>NAMA KUASA PEMOHON</th>
                  <th>ALAMAT KUASA PEMOHON</th>
                  <th>NO.HP KUASA PEMOHON</th>
                  <th>ALASAN</th>
                  <th>STATUS</th>
                  <th>TANGGAL PERNYATAAN</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach ($ditolak as $row => $r) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $r->tujuan; ?></td>
                  <td><?php echo $r->nama; ?></td>
                  <td><?php echo $r->alamat_p; ?></td>
                  <td><?php echo $r->pekerjaan; ?></td>
                  <td><?php echo $r->no_hpp; ?></td>
                  <td><?php echo $r->nama_kp; ?></td>
                  <td><?php echo $r->alamat_kp; ?></td>
                  <td><?php echo $r->no_hpkp; ?></td>
                  <td><?php echo $r->alasan2; ?></td>
                  <td><?php echo $r->status; ?></td>
                  <td><?php echo $r->tanggal_pernyataan; ?></td>
                 <td><a href="<?php echo site_url('admin/hapus3/').$r->id_keberatan?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</button></a></td>
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