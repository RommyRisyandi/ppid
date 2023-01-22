  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Formulir Pernyataan Keberatan atas Informasi</h2>
            </div>
            <!-- /.box-header -->
            <?php echo form_open('pip/a_tambah_k','class="form-horizontal"'); ?>
            <div class="box-body">

              <div class="col-md-12">
                <?php if(isset($pesan)){
            echo '<div class="alert alert-danger">';
            echo $pesan;
            echo '</div>';  
            } ?>
             </div>
             

               <div class="form-group">
                  <label class="col-md-2 control-label">Tujuan Penggunaan Informasi :</label>

                  <div class="col-md-10">
                    <textarea name="tujuan" class="form-control" placeholder="Tujuan Penggunaan Informasi" id="editor" required=""></textarea>
                  </div>
                </div>

                <div class="box-header">
              <h2 class="box-title">Identitas Pemohon</h2>
            </div>
              <div class="form-group">
                  <label class="col-md-2 control-label">Nama :</label>

                  <div class="col-md-5">
                  <input type="text" name="nama" class="form-control" placeholder="Nama" required="">  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Alamat :</label>

                  <div class="col-md-10">
                    <textarea name="alamat_p" class="form-control" placeholder="Alamat" id="editor"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Pekerjaan :</label>
                  <div class="col-md-5">
                    <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" required="">
                  </div>
                </div>


                 <div class="form-group">
                  <label class="col-md-2 control-label">No.HP :</label>

                  <div class="col-md-5">
                  <input type="number" name="no_hpp" class="form-control" placeholder="No.HP" required="">  
                  </div>
                </div>

                <div class="box-header">
              <h2 class="box-title">Identitas Kuasa Pemohon</h2>
            </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Nama :</label>

                  <div class="col-md-5">
                  <input type="text" name="nama_kp" class="form-control" placeholder="Nama" required="">  
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-md-2 control-label">Alamat :</label>

                  <div class="col-md-10">
                    <textarea name="alamat_kp" class="form-control" placeholder="Alamat" id="editor"></textarea>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-md-2 control-label">No.HP :</label>

                  <div class="col-md-5">
                  <input type="number" name="no_hpkp" class="form-control" placeholder="No.HP" required="">  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Alasan Pengajuan Keberatan :</label>
                  <div class="col-md-5">
                    <select name="alasan2" class="form-control">
                      <option value="disabled selected">Alasan Pengajuan Keberatan</option>
                      <option value="Permohonan Informasi Ditolak">Permohonan Informasi Ditolak</option>
                      <option value="Informasi Berkala Tidak Disediakan">Informasi Berkala Tidak Disediakan</option>
                      <option value="Permintaan Informasi Tidak Ditanggapi">Permintaan Informasi Tidak Ditanggapi</option>
                      <option value="Permintaan Informasi Ditanggapi Tidak Sebagaimana yang Diminta">Permintaan Informasi Ditanggapi Tidak Sebagaimana yang Diminta</option>
                      <option value="Permintaan Informasi Tidak Dipenuhi">Permintaan Informasi Tidak Dipenuhi</option>
                      <option value="Biaya yang Dikenakan Tidak Wajar">Biaya yang Dikenakan Tidak Wajar</option>
                      <option value="Informasi yang Disampaikan Melebihi Jangka Waktu yang Ditentukan">Informasi yang Disampaikan Melebihi Jangka Waktu yang Ditentukan</option>
                    </select>
                  </div>
                </div>

                 <div class="form-group">
                  <div class="col-md-5">
                  <input type="hidden" name="status" value="belum diproses" class="form-control">  
                  </div>
                </div>

                

                <div class="form-group">
                  <div class="col-md-5">
                <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-envelope"></i> Kirim Permohonan</button>
                <button type="reset" name="reset" class="btn btn-info"><i class="fa fa-refresh"></i> Reset</button>
                </div>
                </div>
                
              </div>
              <?php echo form_close(); ?>
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