<!DOCTYPE html>
<html>
<head>
	<title>TAMPIL</title>
	<link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/home_user.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/styles.css" rel="stylesheet">

</style>
</head>
<body>
<div id="page">

<div id="konten">
<br />

<div class="col-xs-12 col-sm-10 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">

  <p style="font-size:50px;font-family:calibri"> Pembelajaran </p>
	<form action=" <?php echo site_url('C_tampil/index'); ?> "> <input type="submit" name="index" value="Home" class="btn btn-btn danger btn-btn danger"> </form><br> <br></th>


	<TABLE id="example1" class="table table-bordered table-hover" border="1px">

		<thead class="danger">
			<tr class="danger">
				<th>Nama Sesi</th>
				<th>Download Tugas</th>
				<th>Upload Tugas</th>
			</tr>
		</thead>

		<tbody>
		<!-- CARA1 -->
		<?php
			foreach ($datauser as $key) {	
		?>
			<tr>
				<th><?php echo $key->Nama_sesi; ?></th>
				<th><a href="<?php echo base_url('upload/t_linkPengayaan/')?>"><?php echo $key->Tugas ?></a></th>
				<th><?php echo form_open_multipart('C_tampil/do_upload');?>
 
						<input type="file" name="berkas" />
					 
						<br /><br />
					 
						<input type="submit" value="upload" /></th>
				</form>
</body>
</html>
			</tr>
			<?php
			}
			
	
		?>
		</tbody>
	</TABLE>


</body>
</html>