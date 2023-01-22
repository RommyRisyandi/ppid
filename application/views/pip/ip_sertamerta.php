  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Daftar Informasi Publik Secara Serta Merta</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo site_url('pip/tambah'); ?>"><button class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Permohonan Informasi</button></a>
              <a href="<?php echo site_url('pip/tambah_k'); ?>"><button class="btn btn-warning"><i class="fa fa-pencil-square-o"></i> Pernyataan Keberatan</button></a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO.</th>
                  <th>NAMA INFORMASI</th>
                  <th>PEJABAT YANG MENGUASAI/PENANGGUNG JAWAB</th>
                  <th>PENANGGUNG JAWAB PEMBUATAN ATAU PENERBITAN INFORMASI</th>
                  <th>WAKTU DAN TEMPAT PEMBUATAN INFORMASI</th>
                  <th>INFORMASI YANG TERSEDIA</th>
                  <th>JANGKA WAKTU PENYIMPANAN</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach ($sertamerta as $row => $r) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $r->nama; ?></td>
                  <td><?php echo $r->pejabat; ?></td>
                  <td><?php echo $r->penanggung_jawab; ?></td>
                  <td><?php echo $r->tahun." ".$r->tempat; ?></td>
                  <td><?php echo $r->informasi; ?></td>
                  <td><?php echo $r->jangka; ?> Tahun</td>
                  <td><a href="<?php echo base_url().'pip/download/'.$r->id_ip;?>"><button class="btn btn-primary btn-xs "><i class="fa fa-download"></i> Download</button></a></td>
                </tr>
                <?php } ?>
              </tbody>
              </table>
              <a href="<?php echo site_url('pip/cetak_sertamerta'); ?>"><button class="btn btn-danger"><i class="fa fa-print"></i> Cetak Informasi</button></a>
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