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


	<TABLE id="example1" class="table table-bordered table-hover" border="1px">

		<thead class="danger">
			<tr class="danger">
				<th>Nomor Sesi</th>
				<th>Topik</th>
				<th>Uraian</th>
			</tr>
		</thead>

		<tbody>
		<!-- CARA1 -->
		<?php
			foreach ($datauser as $key) {	
		?>
			<tr>
				<th><a href="<?php echo site_url('C_tampil/t_linkSesi/'.$key->ID_pm); ?>"><?php echo "Sesi ",$key->Nama_sesi; ?> </th>
				<th><?php echo $key->Topik; ?></th>
				<th><?php echo $key->Uraian; ?></th>
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