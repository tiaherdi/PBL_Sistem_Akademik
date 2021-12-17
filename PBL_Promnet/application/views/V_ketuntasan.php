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

  <center> <p style="font-size:50px;font-family:calibri"> KETUNTASAN </p> </center>
	<form action="<?php echo site_url('C_tampil/insertJawabanTesSesi')?>"  method="POST">
	<TABLE id="example1" class="table table-bordered table-hover" border="0px">

		<!-- <thead class="danger">
			<tr class="danger">
				<th>Kode Mata Pelajaran</th>
				<th>Soal</th>
				<th>Pilihan 1</th>
				<th>Pilihan 2</th>
				<th>Pilihan 3</th>
				<th>Pilihan 4</th>
				<th>Pilihan 5</th>
			</tr>
		</thead> -->

		<!-- <tbody> -->
		<!-- CARA1 -->
		<input type="text" value="<?php echo $ID_pm; ?>" name="ID_pm" hidden>
		<ol type="a">
		<?php
				//print_r($datauser);
			foreach ($datauser as $key) {	
		?>
			<tr>
				<th><li><?php echo $key->Pertanyaan; ?></li></th>
			</tr>
			<tr>

				<th> <input type="radio" name="<?php echo $key->ID_soal; ?>" value="<?php echo $key->Pilihan1; ?>" required> <?php echo "A.",$key->Pilihan1; ?> </th>
				<th><input type="radio" name="<?php echo $key->ID_soal; ?>" value="<?php echo $key->Pilihan2; ?>"> <?php echo "B.",$key->Pilihan2; ?></th>
				<th><input type="radio" name="<?php echo $key->ID_soal; ?>" value="<?php echo $key->Pilihan3 ?>"> <?php echo "C.",$key->Pilihan3; ?>?></th>
				<th><input type="radio" name="<?php echo $key->ID_soal; ?>" value="<?php echo $key->Pilihan4 ?>"> <?php echo "D.",$key->Pilihan4; ?>?></th>
				<th><input type="radio" name="<?php echo $key->ID_soal; ?>" value="<?php echo $key->Pilihan5 ?>"> <?php echo "E.",$key->Pilihan5; ?></th>
			</tr>
			<?php
			}
			
	
		?>
		<!-- </tbody> -->
		</ol>
	</TABLE>

		
                        <center>
                         <input type="submit" class="btn btn-danger" value="Input"> 
                         </form>  
                 <input type="reset" class="btn btn-danger"> <br> <br>
</body>
</html>