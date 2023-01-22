      <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?php echo base_url();?>assets/images/42.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>LOGIN</h1>
                 <p class="mb-0">SILAHKAN LOGIN TERLEBIH DAHULU</p>
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

            
<?php echo form_open('login/proseslogin'); ?>
            <form action="#" class="p-5 bg-white">
            
              <div class="row form-group">
                 <div class="col-md-12">
                <?php if(isset($pesan)){
            echo '<div class="alert alert-danger">';
            echo $pesan;
            echo '</div>';  
            } ?>
             </div>
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
                <div class="col-12">
                  <p>Belum Punya Akun? daftar <a href="<?php echo site_url('user/registrasi'); ?>">disini</a></p>
                </div>
              </div>

            
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="MASUK" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
            <?php echo form_close(); ?>
          </div>
          
        </div>
      </div>
    </div>

    