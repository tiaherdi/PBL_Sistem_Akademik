<!DOCTYPE html>
<html>
<head>
	<title>TAMPIL</title>
	<link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/home_user.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/styles.css" rel="stylesheet">
</head>
<body bgcolor="#70a1ff" font-family="Calibri">
<br />

<center>
<h1> P B L | GURU </h1> <br> <br><br>

<table>
	<td>
		<th><form action=" <?php echo site_url('C_tampil/t_siswa'); ?>"> <input type="submit" name="t_siswa" value="Data Siswa" class="btn btn-btn danger btn-btn danger"> </form><br> <br></th>
		<th><form action=" <?php echo site_url('C_tampil/t_soal'); ?>"> <input type="submit" name="t_soal" value="Data Soal" class="btn btn-btn danger btn-btn danger"> </form> <br><br></th>
		<th><form action=" <?php echo site_url('C_tampil/t_pembelajaran'); ?>"> <input type="submit" name="t_pembelajaran" value="Data Pembelajaran" class="btn btn-btn danger btn-btn danger"> </form> <br> <br></th>
		<th><form action=" <?php echo site_url('C_tampil/t_tugas1'); ?>"> <input type="submit" name="t_pembelajaran" value="Data Jawaban Tugas" class="btn btn-btn danger btn-btn danger"> </form> <br> <br></th>
		<th><form action=" <?php echo site_url('C_tampil/t_pengayaan1'); ?>"> <input type="submit" name="t_pembelajaran" value="Data Jawaban Pengayaan" class="btn btn-btn danger btn-btn danger"> </form> <br> <br></th>
		<th><form action=" <?php echo site_url('C_tampil/t_tambahsesi'); ?>"> <input type="submit" name="t_pembelajaran" value="Data Tambah Sesi" class="btn btn-btn danger btn-btn danger"> </form> <br> <br></th>
	</td>
</table>


<!-- <form action=" <?php echo site_url('C_tampil/index'); ?>"> <input type="submit" name="index" value="Kembali ke Home" class="btn btn-btn danger btn-btn danger"> </form> --> <br> <br>
</center>
</body>
</html>