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

  <center> <p style="font-size:50px;font-family:calibri"> Mata Pelajaran </center> </p> <br>
<form action=" <?php echo site_url('C_tampil/t_lihatnilai'); ?> "> <input type="submit" name="index" value="NILAI" class="btn btn-btn danger btn-btn danger"> </form>

	<TABLE id="example1" class="table table-bordered table-hover" border="1px">

		<thead class="danger">
			<tr class="danger">
				<th>Kode Mata Pelajaran</th>
				<th>Nama Mata Pelajaran</th>
			</tr>
		</thead>

		<tbody>
		<!-- CARA1 -->
		<?php
			foreach ($datauser as $key) {	
		?>
			<tr>
				<th><?php echo "K000",$key->ID_matpel; ?></a></th>
				<th><a href="<?php echo site_url('C_tampil/t_linkMatpel/'.$key->ID_matpel); ?>"><?php echo $key->Nama_Matpel; ?> </a></th>
			</tr>
			<?php
			}
			
	
		?>
		</tbody>
	</TABLE>


</body>
</html>