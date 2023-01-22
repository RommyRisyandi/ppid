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
<h4 style="text-align: center;">PERNYATAAN KEBERATAN ATAS PERMOHONAN INFORMASI</h4>
	<br><br>
	<h4>A. INFORMASI PENGAJU KEBERATAN</h4>
	<table width="100%">
		<tr>
			<td id="td" valign="top">Tujuan penggunaan informasi</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->tujuan;?></td>
		</tr>
		<tr><td id="td" valign="top"><h5>IDENTITAS PEMOHON</h5></td></tr>
		
		<tr>
			<td id="td" valign="top">Nama </td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->nama;?></td>
		</tr>
		<tr>
			<td id="td" valign="top">Alamat</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->alamat_p;?></td>
		</tr>
		<tr>
			<td id="td" valign="top">Pekerjaan</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->pekerjaan;?></td>
		</tr>
		<tr>
			<td id="td" valign="top">No.Hp</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->no_hpp;?></td>
		</tr>
		<tr><td id="td" valign="top"><h5>IDENTITAS KUASA PEMOHON</h5></td></tr>
		
		<tr>
			<td id="td" valign="top">Nama</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->nama_kp;?></td>
		</tr>
		<tr>
			<td id="td" valign="top">Alamat</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->alamat_kp;?></td>
		</tr>
		<tr>
			<td id="td" valign="top">No.Hp</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->no_hpkp;?></td>
		</tr>
	</table>
	<h4>B. ALASAN PENGAJUAN KEBERATAN</h4>
	<table width="100%">
		<tr>
			<td id="td" valign="top">Alasan</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $r->alasan2;?></td>
		</tr>
	</table>
	<h4>C. HARI/TANGGAL/WAKTU TANGGAPAN ATAS KEBERATAN YANG DIBERIKAN <?php echo $r->tanggal_pernyataan; ?></h4>
	<p>Demikian keberatan ini saya sampaikan, atas perhatian dan tanggapannya, saya ucapkan terima kasih.</p>
	<br><br><br>
	<table width="140%">
			<tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mengetahui</td>
				<td>Singkawang, ........................</td>
			</tr>
			<tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petugas Informasi</td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengaju Keberatan</td>
				</tr>
				<tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Penerima Keberatan)</td>
				</tr>
				<tr>
				<td><br><br><br><br></td>
			</tr>
			<tr>
				<td>&nbsp;&nbsp;...........................................</td>
				<td>&nbsp;&nbsp;...........................................</td>
			</tr>
		</tbody>
	</table>
	</div>
	<button class="btn btn-success" onclick="printer()"><i class="fa fa-print"></i> Cetak Data</button>
</body>
</html>