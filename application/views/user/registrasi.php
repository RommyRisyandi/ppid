    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?php echo base_url();?>assets/images/42.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>REGISTRASI</h1>
                 <p class="mb-0">SILAHKAN REGISTRASI TERLEBILH DAHULU</p>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5"  data-aos="fade">

            
<?php echo form_open('user/aregistrasi'); ?>
            <form action="#" class="p-5 bg-white">
             
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="nama">Nama Lengkap</label> 
                  <input type="text" name="nama" class="form-control" required="">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="nik">NIK</label> 
                  <input type="number" name="nik" class="form-control" required="">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="alamat">Alamat</label> 
                  <input type="text" name="alamat" class="form-control" required="">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="provinsi">Provinsi</label> 
                  <select class="form-control" name="provinsi" id="provinsi" required="">
                    <option value="disabled">Pilih Provinsi</option>
                   
                    <?php foreach ($provinsi as $provinsi): ?>

                      <option value="<?php echo $provinsi->id_provinsi; ?>"><?php echo $provinsi->nama_provinsi; ?></option>
                     
                  <?php endforeach; ?>
                  </select>
                </div>
              </div>
              
               <div class="row form-group">
             <div class="col-md-12">
                  <label class="text-black" for="kota">Kota/Kabupaten</label> 
                  <select class="form-control" name="kota" id="kota" disabled="" required="">
                    
                  </select>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="no_kontak">No. Kontak</label> 
                  <input type="text" name="no_kontak" class="form-control" required="">
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" name="email" class="form-control" required="">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="password">Password</label> 
                  <input type="password" name="password" class="form-control" required="">
                </div>
              </div>
               <div class="row form-group">
                <div class="col-md-12">
              <input type="hidden" name="level" value="user" class="form-control">   
            </div>
              </div>           

              <div class="row form-group">
                <div class="col-12">
                  <p>Have an account? <a href="<?php echo site_url('user/login'); ?>">Log In</a></p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Sign In" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
            <?php echo form_close(); ?>
          </div>
          
        </div>
      </div>
    </div>
    
    
    