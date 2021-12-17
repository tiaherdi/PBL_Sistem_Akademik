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
				<th>Konten 1</th>
				<th>Konten 2</th>
				<th>Konten 3</th>
				<th>Tugas</th>
				<th>Pengayaan</th>
				<th>Ketuntasan</th>
			</tr>
		</thead>

		<tbody>
		<!-- CARA1 -->
		<?php
			foreach ($datauser as $key) {	
		?>
			<tr>
				<th><?php echo $key->Nama_sesi; ?></th>
				<th><a href="<?php echo base_url('upload/'.$key->Konten1)?>"><?php echo $key->Konten1 ?></a></th>
				<th><a href="<?php echo base_url('upload/'.$key->Konten2)?>"><?php echo $key->Konten2 ?></a></th>
				<th><a href="<?php echo base_url('upload/'.$key->Konten3)?>"><?php echo $key->Konten3 ?></a></th>
				<th><a href="<?php echo site_url('C_tampil/t_tugas/'.$key->ID_pm); ?>"><?php echo $key->Tugas; ?></a></th>
				<th><a href="<?php echo site_url('C_tampil/t_linkPengayaan/'.$key->ID_pm); ?>">Lihat Soal</a></th>
				<th><a href="<?php echo site_url('C_tampil/t_linkKetuntasan/'.$key->ID_pm); ?>">Lihat Ketuntasan</a></th>
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