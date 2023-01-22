<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="<?php echo base_url(); ?>/assets/images/logo.png">
	<title><?php echo $title; ?></title>

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

<script type="text/javascript">
    
   function printer(){
    $('.btn').hide();
    javascript:window.print();
    $('.btn').show();
   }
  </script>
  <style type="text/css" media="screen">
  	p.indent{
  		padding-left: 1.8em;
  	}
  </style>
  <!-- Surat css -->
  <style type="text/css">
  	.halaman
  	{
  		width: 800;
  		height: auto;
  		margin: 10 auto;
  	}
  	#isi
  	{
  		width: auto;
  		height: auto;
  		padding: 80px;
  	}
  	#td
  	{
  		width: 200;
  	}
  </style>
</head>

<body class="halaman">

	<div id="isi">
<img style="display: block; margin: auto; width: 100%; height: 100px;" src="<?php echo base_url(); ?>/assets/images/kepala_surat.png">
		<h4 style="text-align: center;">FORMULIR</h4>
<h4 style="text-align: center;">PERMOHONAN INFORMASI PUBLIK</h4>
	<p style="text-align: right;">NO.:......./PPID/KOMINFO/PI/..../.......</p>
	<p>yang bertanda dibawah ini, mengajukan permintaan informasi : </p>
	<table>
		<tr>
			<td id="td" valign="top">NAMA PEMOHON</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->nama_pemohon;?></td>
		</tr>
		<tr>
			<td id="td" valign="top">JENIS KELAMIN </td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->jenis_kelamin;?></td>
		</tr>
		<tr>
			<td id="td" valign="top">USIA</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->usia;?></td>
		</tr>
		<tr>
			<td id="td" valign="top">NIK (BERDASARKAN KTP)</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->nik;?></td>
		</tr>
		<tr>
			<td id="td" valign="top">ALAMAT</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->alamat;?></td>
		</tr>
		<tr>
			<td id="td" valign="top">TELEPON</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->telepon;?></td>
		</tr>
		<tr>
			<td id="td" valign="top">EMAIL</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->email;?></td>
		</tr>
		<tr>
			<td id="td" valign="top">INFORMASI YANG DIBUTUHKAN</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->informasi_diminta;?></td>
		</tr>
		<tr>
			<td id="td" valign="top">ALASAN</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->alasan;?></td>
		</tr>
		<tr>
			<td id="td" valign="top">TINDAK LANJUT</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->tindak_lanjut;?></td>
		</tr>
	</table>
	<p>data dan informasi yang kami peroleh, kami gunakan sesuai dengan ketentuan perundang-undangan yang berlaku.</p>
	
	<p style="text-align: right;">Singkawang, ........................</p>
	<p style="text-align: right;">Pemohon informasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	<br><br><br><br>
	<p style="text-align: right;">...........................................</p>
	</div>
	<button class="btn btn-success" onclick="printer()"><i class="fa fa-print"></i> Cetak Data</button>
</body>
</html>