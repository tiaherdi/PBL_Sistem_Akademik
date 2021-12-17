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

  <p style="font-size:50px;font-family:calibri"> DATA NILAI SISWA </p>
 <br> 
	<TABLE id="example1" class="table table-bordered table-hover" border="1px">

		<thead class="danger">
			<tr class="danger">
				<th>NILAI KETUNTASAN</th>
			</tr>
		</thead>

		<tbody>
		<?php
			foreach ($datauser as $key) {	
		?>
			<tr>
				<th><?php echo $key->nilai; ?></th>

			</tr>
			<?php
			}
			
		


		?>
		</tbody>
	</TABLE>

	<TABLE id="example1" class="table table-bordered table-hover" border="1px">

		<thead class="danger">
			<tr class="danger">
				<th>NILAI PENGAYAAN</th>
			</tr>
		</thead>

		<tbody>
		<?php
			foreach ($data as $key) {	
		?>
			<tr>
				<th><?php echo $key->nilai; ?></th>

			</tr>
			<?php
			}
		?>
		</tbody>
	</TABLE>

	<TABLE id="example1" class="table table-bordered table-hover" border="1px">

		<thead class="danger">
			<tr class="danger">
				<th>NILAI TUGAS</th>
			</tr>
		</thead>

		<tbody>
		<?php
			foreach ($tugas as $key) {	
		?>
			<tr>
				<th><?php echo $key->nilai; ?></th>

			</tr>
			<?php
			}
		?>
		</tbody>
	</TABLE>


</body>
</html>