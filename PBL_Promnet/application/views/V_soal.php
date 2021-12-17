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

  <p style="font-size:50px;font-family:calibri"> SOAL </p>
  <!-- <form action=" <?php echo site_url('C_tampil/index'); ?> "> <input type="submit" name="index" value="Home" class="btn btn-btn danger btn-btn danger"> </form> --><br> <br></th>

  <table class="table">
	<form action="<?php echo site_url('C_input/insertsoal'); ?>" method="POST">

	<tr> 
	<th> ID Pembelajaran </th> 
	<td> <input type="text" name="ID" placeholder="ID">	</td> </tr>		
	<tr> 
	<th> Pertanyaan </th>
	<td> <input type="text" name="Pertanyaan" placeholder="Pertanyaan"> </td> </tr>			
	<tr> 
	<th> Pilihan 1 </th>
	<td> <input type="text" name="Pilihan1" placeholder="Pilihan1"> </td> </tr>
	<tr> 
	<th> Pilihan 2 </th> 
	<td> <input type="text" name="Pilihan2" placeholder="Pilihan2"> </td>	</tr>
	<tr> 
	<th> Pilihan 3 </th> 
	<td> <input type="text" name="Pilihan3" placeholder="Pilihan3"> </td>	</tr>
	<tr> 
	<th> Pilihan 4 </th> 
	<td> <input type="text" name="Pilihan4" placeholder="Pilihan4"> </td>	</tr>
	<tr> 
	<th> Pilihan 5 </th> 
	<td> <input type="text" name="Pilihan5" placeholder="Pilihan5"> </td>	</tr>
	<tr> 
	<th> Kunci Jawaban </th> 
	<td> <input type="text" name="Kunci" placeholder="Kunci"> </td>	</tr>

</table> <br>
<center>
 <input type="submit" class="btn btn-danger" value="Simpan"> 
 </form>
<input type="reset" class="btn btn-danger"> <br> 

	<TABLE id="example1" class="table table-bordered table-hover" border="1px">

		<thead class="danger">
			<tr class="danger">
				<th>ID Soal</th>
				<th>ID Pembelajaran</th>
				<th>Pertanyaan</th>
				<th>Pilihan 1</th>
				<th>Pilihan 2</th>
				<th>Pilihan 3</th>
				<th>Pilihan 4</th>
				<th>Pilihan 5</th>
				<th>Kunci Jawaban</th>
			</tr>
		</thead>

		<tbody>
		<!-- CARA1 -->
		<?php
			foreach ($datauser as $key) {	
		?>
			<tr>
				<th><?php echo $key->ID_soal; ?></th>
				<th><?php echo $key->ID_pm; ?></th>
				<th><?php echo $key->Pertanyaan; ?></th>
				<th><?php echo $key->Pilihan1; ?></th>
				<th><?php echo $key->Pilihan2; ?></th>
				<th><?php echo $key->Pilihan3; ?></th>
				<th><?php echo $key->Pilihan4; ?></th>
				<th><?php echo $key->Pilihan5; ?></th>
				<th><?php echo $key->Kunci_Jawaban; ?></th>
			</tr>
			<?php
			}
			
	
		?>
		</tbody>
	</TABLE>


</body>
</html>