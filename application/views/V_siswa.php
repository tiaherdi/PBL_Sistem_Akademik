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
<!--<div id="header" padding="0px"> -->

<div id="konten">
<br />

<div class="col-xs-12 col-sm-10 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">

   <p style="font-size:50px;font-family:calibri"> SISWA </p>
   <!-- <form action=" <?php echo site_url('C_tampil/index'); ?> "> <input type="submit" name="index" value="Home" class="btn btn-btn danger btn-btn danger"> </form><br>  --><br></th>
	
  </table>

	<TABLE id="example1" class="table table-bordered table-hover" border=1px">

		<thead class="danger">
			<tr class="danger">
				<th>ID SISWA</th>
				<th>NISN</th>
				<th>NAMA</th>
				<th>PASSWORD</th>
			</tr>
		</thead>

		<tbody>
		<!-- CARA1 -->
		<?php
			foreach ($datauser as $key) {	
		?>
			<tr>
				<th><?php echo $key->ID_siswa; ?></th>
				<th><?php echo $key->NISN; ?></th>
				<th><?php echo $key->Nama; ?></th>
				<th><?php echo $key->Password; ?></th>
			</tr>
			<?php
			}
			
	
		?>
		</tbody>
	</TABLE>


</body>
</html>