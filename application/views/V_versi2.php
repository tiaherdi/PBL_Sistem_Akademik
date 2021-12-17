<!DOCTYPE html>
<html>
<head>
	<title>TAMPIL</title>
	<link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/home_user.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/styles.css" rel="stylesheet">
</head>
<body background-color="#70a1ff" font-family="Calibri">
<br />

<center>
<h1> Versi 2 </h1> <br> <br>

<table>
	<td>
		<th><form action=" <?php echo site_url('C_tampil/t_siswa'); ?>"> <input type="submit" name="t_siswa" value="Data Siswa" class="btn btn-btn danger btn-btn danger"> </form> <br> <br></th>
		<th><form action=" <?php echo site_url('C_tampil/t_pem'); ?>"> <input type="submit" name="t_pembelajaran2" value="Data Pembelajaran" class="btn btn-btn danger btn-btn danger"> </form> <br> <br></th>
	</td>
</table>

<br>
<form action=" <?php echo site_url('C_tampil/index'); ?>"> <input type="submit" name="index" value="Kembali ke Home" class="btn btn-btn danger btn-btn danger"> </form>

</center>

</body>
</html>