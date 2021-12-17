<!DOCTYPE html>
<html>
<head>
	<title>TAMPIL</title>
	<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/home_user.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet">

</style>
</head>
<body>
<div id="page">

<div id="konten">
<br />

<div class="col-xs-12 col-sm-10 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">

  <p style="font-size:50px;font-family:calibri"> TAMBAH SESI </p>
  <!-- <form action=" <?php echo site_url('C_tampil/index'); ?> "> <input type="submit" name="index" value="Home" class="btn btn-btn danger btn-btn danger"> </form> --><br> <br></th>

  <table class="table">
	<form action="<?php echo site_url('C_input/tambahsesi'); ?>" method="POST">

	<tr> 
	<th> ID Pembelajaran </th> 
	<td> <input type="text" name="ID_pm" placeholder="ID Pembelajaran">	</td> </tr>	
	<tr> 
	<th> ID Mata Pelajaran </th> 
	<td> <input type="text" name="ID_matpel" placeholder="ID Mata Pelajaran"> </td>	</tr>
	<th> Nama Sesi</th>
	<td> <input type="text" name="Nama_sesi" placeholder="Nama Sesi"> </td> </tr>			
	<tr> 
	<th> Topik </th>
	<td> <input type="text" name="Topik" placeholder="Topik"> </td> </tr>
	<tr> 
	<th> Uraian </th> 
	<td> <input type="text" name="Uraian" placeholder="Uraian"> </td>	</tr>
	<tr> 
	<th> Konten1 </th> 
	<td> <input type="text" name="Konten1" placeholder="Konten1"> </td>	</tr>
	<tr> 
	<th> Konten2 </th> 
	<td> <input type="text" name="Konten2" placeholder="Konten2"> </td>	</tr>
	<tr> 
	<th> Konten3 </th> 
	<td> <input type="text" name="Konten3" placeholder="Konten3"> </td>	</tr>
	<tr> 
	<th> Tugas </th> 
	<td> <input type="text" name="Tugas" placeholder="Tugas"> </td>	</tr>
	<tr> 


</table> <br>
<center>
 <input type="submit" class="btn btn-danger" value="Simpan"> 
 </form>
<input type="reset" class="btn btn-danger"> <br> 

</body>
</html>