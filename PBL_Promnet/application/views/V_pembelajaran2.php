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
				<th>ID Pembelajaran</th>
				<th>Nama Sesi</th>
				<th>Topik</th>
				<th>Uraian</th>
				<th>Konten 1</th>
				<th>Konten 2</th>
				<th>Konten 3</th>
				<th>Tugas</th>
			</tr>
		</thead>

		<tbody>
		<!-- CARA1 -->
		<?php
			foreach ($datauser as $key) {	
		?>
			<tr>
				<th><a href="<?php echo site_url('C_tampil/t_linkMatpel/'.$key->ID_matpel); ?>"><?php echo $key->ID_matpel; ?></a></th>
				<th><?php echo $key->Nama_sesi; ?></th>
				<th><?php echo $key->Topik; ?></th>
				<th><?php echo $key->Uraian; ?></th>
				<th><a href="<?php echo base_url('upload/'.$key->Konten1)?>"><?php echo $key->Konten1 ?></a></th>
				<th><a href="<?php echo base_url('upload/'.$key->Konten2)?>"><?php echo $key->Konten2 ?></a></th>
				<th><a href="<?php echo base_url('upload/'.$key->Konten3)?>"><?php echo $key->Konten3 ?></a></th>
				<th><?php echo $key->Tugas; ?></th>
			</tr>
			<?php
		}
			
	
		?>
		</tbody>
	</TABLE>


</body>
</html>