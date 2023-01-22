<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<!-- css -->
	<link rel="icon" href="<?php echo base_url(); ?>/assets/images/logo.png">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets2/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets2/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets2/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets2/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets2/dist/css/skins/_all-skins.min.css">
	<!-- js -->
	<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>assets2/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js
"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>assets2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets2/dist/js/demo.js"></script>
<!-- page script -->
<!-- Ckeditor -->
<script src="<?php echo base_url();?>assets2/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets2/ckeditor/samples/js/sample.js" type="text/javascript"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
      'scrollY'     : 200,
      'scrollX'     : true
    });
  });
</script>
<script>
  $(function () {
    $('#tabel1').DataTable({
      'autoWidth' : true,
      'searching'   : false,
      'lengthChange': false,
       'paging'      : false,
       'info'        : false

    });
  });
</script>
<script>
  $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
} );
</script>
<!-- Print -->
<script type="text/javascript">
    
   function printer(){
    $('.btn').hide();
    $('.sss').hide();
    javascript:window.print();
    $('.btn').show();
   }
  </script>
</head>

<h2 style="text-align: center;">DAFTAR PEMOHON INFORMASI PUBLIK</h2>

              <table id="tabel1" class="table table-bordered">
                <thead>
                <tr>
                  <th>NO.</th>
                  <th>OPD TUJUAN</th>
                  <th>NAMA PEMOHON</th>
                  <th>JENIS KELAMIN</th>
                  <th>USIA</th>
                  <th>NIK</th>
                  <th>ALAMAT</th>
                  <th>TELEPON</th>
                  <th>FAX</th>
                  <th>EMAIL</th>
                  <th>INFORMASI YANG DIMINTA</th>
                  <th>ALASAN</th>
                  <th>TINDAK LANJUT</th>
                  <th>TANGGAL/WAKTU PERMOHONAN</th>
                 
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach ($data as $row => $r) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $r->nama_opd; ?></td>
                  <td><?php echo $r->nama_pemohon; ?></td>
                  <td><?php echo $r->jenis_kelamin; ?></td>
                  <td><?php echo $r->usia; ?></td>
                  <td><?php echo $r->nik; ?></td>
                  <td><?php echo $r->alamat; ?></td>
                  <td><?php echo $r->telepon; ?></td>
                  <td><?php echo $r->fax; ?></td>
                  <td><?php echo $r->email; ?></td>
                  <td><?php echo $r->informasi_diminta; ?></td>
                  <td><?php echo $r->alasan; ?></td>
                  <td><?php echo $r->tindak_lanjut; ?></td>
                  <td><?php echo $r->tanggal_post; ?></td>
                </tr>
                <?php } ?>
              </tbody>
              </table>
          

 <button class="btn btn-danger" onclick="printer()"><i class="fa fa-print"></i> Cetak Data</button>