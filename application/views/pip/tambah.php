  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Formulir Permohonan Informasi Publik</h2>
            </div>
            <!-- /.box-header -->
            <?php echo form_open_multipart('pip/atambah','class="form-horizontal"'); ?>
            <div class="box-body">

              <div class="col-md-12">
                <?php if(isset($pesan)){
            echo '<div class="alert alert-danger">';
            echo $pesan;
            echo '</div>';  
            } ?>
             </div>
             

                <div class="form-group">
                  <label class="col-md-2 control-label">OPD Tujuan :</label>
                   <div class="col-md-5">
                    <select name="id_opd" class="form-control">
                      <option value="disabled">OPD Tujuan</option>
                      <?php foreach ($opd as $opd): ?>

                      <option value="<?php echo $opd->id_opd; ?>"><?php echo $opd->nama_opd; ?></option>
                     
                  <?php endforeach; ?>
                    </select>
                  </div>
                </div>

              <div class="form-group">
                  <label class="col-md-2 control-label">Nama Pemohon :</label>

                  <div class="col-md-5">
                  <input type="text" name="nama_pemohon" class="form-control" placeholder="Nama Pemohon" required="">  
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label class="col-md-2 control-label">Jenis Kelamin :</label>
                  <div class="col-md-5">
                    <select name="jenis_kelamin" class="form-control">
                      <option value="" disabled selected>Jenis Kelamin</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Usia :</label>
                  <div class="col-md-5">
                    <input type="number" name="usia" class="form-control" placeholder="Usia" required="">
                  </div>
                </div>


                 <div class="form-group">
                  <label class="col-md-2 control-label">No.KTP :</label>

                  <div class="col-md-5">
                  <input type="number" name="nik" class="form-control" placeholder="No.KTP" required="">  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Scan KTP (max.300kb) :</label>

                  <div class="col-md-5">
                  <input type="file" name="userfile" class="form-control" required="required">  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Alamat Lengkap :</label>

                  <div class="col-md-10">
                    <textarea name="alamat" class="form-control" placeholder="Keterangan" id="editor"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Telepon :</label>
                  <div class="col-md-5">
                  <input type="number" name="telepon" class="form-control" placeholder="Telepon" required="">  
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-md-2 control-label">Fax :</label>

                  <div class="col-md-5">
                  <input type="text" name="fax" class="form-control" placeholder="Fax">  
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-md-2 control-label">E-mail :</label>

                  <div class="col-md-5">
                  <input type="email" name="email" class="form-control" placeholder="E-mail" required="">  
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-md-2 control-label">Informasi yang diminta :</label>

                  <div class="col-md-10">
                    <textarea name="informasi_diminta" class="form-control" placeholder="Informasi yang diminta" id="editor" required=""></textarea>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-md-2 control-label">Alasan Permintaan Informasi :</label>

                  <div class="col-md-10">
                    <textarea name="alasan" class="form-control" placeholder="Alasan Permintaan Informasi" id="editor" required=""></textarea>
                  </div>
                </div>

                 <div class="form-group">
                  <div class="col-md-5">
                  <input type="hidden" name="status" value="belum diproses" class="form-control">  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label">Tindak Lanjut :</label>
                  <div class="col-md-5">
                    <select name="tindak_lanjut" class="form-control">
                      <option value="disabled selected">Tindak Lanjut</option>
                      <option value="Telepon">Telepon</option>
                      <option value="Fax">Fax</option>
                      <option value="Email">Email</option>
                    </select>
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