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
      'autoWidth'   : false,
      'scrollY'     : 200,
      'scrollX'     : true
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

<h2 style="text-align: center;">DAFTAR INFORMASI PUBLIK SECARA BERKALA</h2>
<table class="table table-bordered">
	
	<thead>
		<tr>
			<th>NO.</th>
			<th>NAMA INFORMASI</th>
			<th>PEJABAT YANG MENGUASAI/PENANGGUNG JAWAB</th>
			<th>PENANGGUNG JAWAB PEMBUATAN ATAU PENERBITAN INFORMASI</th>
			<th>WAKTU DAN TEMPAT PEMBUATAN INFORMASI</th>
			<th>INFORMASI YANG TERSEDIA</th>
			<th>JANGKA WAKTU PENYIMPANAN</th>
		</tr>
	</thead>
	<tbody>
		<?php 
                  $no = 1;
                  foreach ($berkala as $row => $r) { ?>
		<tr>
			<td><?php echo $no++; ?></td>
            <td><?php echo $r->nama; ?></td>
            <td><?php echo $r->pejabat; ?></td>
            <td><?php echo $r->penanggung_jawab; ?></td>
            <td><?php echo $r->tahun." ".$r->tempat; ?></td>
            <td><?php echo $r->informasi; ?></td>
            <td><?php echo $r->jangka; ?> Tahun</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

 <button class="btn btn-danger" onclick="printer()"><i class="fa fa-print"></i> Cetak Informasi</button>