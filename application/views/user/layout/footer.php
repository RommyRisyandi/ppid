<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
                <h2 class="footer-heading mb-4">PROFIL DISKOMINFO</h2>
                <p class="mb-4" style="text-align: justify;">DISKOMINFO adalah instansi yang bertanggung jawab atas pengolahan informasi dalam lingkungan Pemerintahan Kota Singkawang. Instansi ini mencakup penyediaan sistem informasi daerah dan pemberian solusi untuk pengolahan data Pemerintahan Kota Singkawang. Sistem informasi yang dibangun DISKOMINFO digunakan oleh instansi-instansi daerah yang berada dalam teritorial Kota Singkawang.</p>
              </div>
              
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Video</h2>
                <object width="270" height="150" data="https://www.youtube.com/embed/m8DwsRCyse4"></object>

              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="https://www.facebook.com/diskominfo.singkawang.1" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="https://twitter.com/mcsingkawang" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="https://www.instagram.com/kominfosingkawang/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Dinas Komunikasi dan Informatika Kota Singkawang.
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.countdown.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/aos.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/rangeslider.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  
<script type="text/javascript">
  $(document).ready(function(){
      $('#provinsi').on('change', function(){
      var id_provinsi = $(this).val();
      if(id_provinsi == '')
      {
        $('#kota').prop('disabled', true);
      }
      else
      {
           $('#kota').prop('disabled', false);
           
           $.ajax({
            url: "<?php echo base_url(); ?>user/get_kota",
            type: "POST",
            data: {'id_provinsi' : id_provinsi},
            dataType: 'json',
            success: function(data){
                 $('#kota').html(data);
            },
            error: function(){
              alert('Error occur...!!');
            }
       });
 

      }
    });
});
</script>

    <style type="text/css" media="screen">
      html{
     overflow-x: hidden; 
  }
  .embedx{
    padding: 30px
  }  
    </style>
  
  </body>
</html>