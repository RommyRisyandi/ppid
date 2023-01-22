  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Edit Informasi Publik</h2>
            </div>
            <!-- /.box-header -->
            <?php echo form_open_multipart('admin/aedit','class="form-horizontal"'); ?>
            <div class="box-body">
              
              <div class="col-md-12">
                <?php if(isset($pesan)){
            echo '<div class="alert alert-danger">';
            echo $pesan;
            echo '</div>';  
            } ?>
             </div>
               <div class="form-group">
                  <label class="col-md-4 control-label">ID Sebelumnya :</label>

                  <div class="col-md-5">
                  <input type="text" name="id_ipa" value="<?php echo $r->id_ip; ?>" class="form-control" placeholder="" readonly>  
                  </div>
                </div>

              <div class="form-group">
                  <label class="col-md-4 control-label">Nama Informasi :</label>

                  <div class="col-md-5">
                  <input type="text" name="nama" value="<?php echo $r->nama; ?>" class="form-control" placeholder="Nama Informasi" required="">  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label">Kategori IP :</label>

                  <div class="col-md-5">
                    <select name="kategori" class="form-control">
                      <option value="disabled">Pilih Kategori IP</option>
                      <?php foreach ($kategori as $kategori): ?>

                      <option value="<?php echo $kategori->id_kategori; ?>"><?php echo $kategori->nama; ?></option>
                     
                  <?php endforeach; ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label">Pejabat yang Menguasai:</label>
                  <div class="col-md-5">
                    <input type="text" name="pejabat" value="<?php echo $r->pejabat; ?>" class="form-control" placeholder="Pejabat yang Menguasai/ Penanggung Jawab" required="">
                  </div>
                </div>


                 <div class="form-group">
                  <label class="col-md-4 control-label">Penanggung Jawab Pembuatan Informasi :</label>

                  <div class="col-md-5">
                  <input type="text" name="penanggung_jawab" value="<?php echo $r->penanggung_jawab; ?>" class="form-control" placeholder="Penanggung Jawab Pembuatan Informasi" required="">  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label">Waktu dan Tempat Pembuatan Informasi :</label>

                  <div class="col-md-5">
                  <input type="number" name="tahun" value="<?php echo $r->tahun; ?>"class="form-control" placeholder="Waktu (Tahun)" required="">
                  <input type="text" name="tempat" value="<?php echo $r->tempat; ?>" class="form-control" placeholder="Tempat" required="">    
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-md-4 control-label">Informasi yang Tersedia :</label>

                  <div class="col-md-5">
                    <select name="informasi" class="form-control">
                      <option value="disabled">Informasi yang Tersedia</option>
                       <option value="Hard Copy">Hard Copy</option>
                        <option value="Soft Copy">Soft Copy</option>
                         <option value="Hard Copy & Soft Copy">Hard Copy & Soft Copy</option>
                    </select>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-md-4 control-label">Jangka Waktu Penyimpanan :</label>

                  <div class="col-md-5">
                  <input type="number" name="jangka" value="<?php echo $r->jangka; ?>" class="form-control" placeholder="Jangka Waktu Penyimpanan" required="">  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label">Upload File : </label>

                  <div class="col-md-5">
                  <input type="file" name="userfile" class="form-control" required="required">  
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-5">
                <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
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