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

 <center> <p style="font-size:50px;font-family:calibri"> PENGAYAAN </p> </center>

	<TABLE id="example1" class="table table-bordered table-hover" border="1px">

		<thead class="danger">
			<tr class="danger">
				<th>Kode Mata Pelajaran</th>
				<th>Soal</th>
			</tr>
		</thead>

		<tbody>
		<!-- CARA1 -->
		<?php
			foreach ($datauser as $key) {	
		?>
			<tr>
				<th><?php echo "K000",$key->ID_pm; ?></th>
				<th><?php echo $key->Soal; ?></th>
			</tr>
			<?php
			}
			
	
		?>
		</tbody>
	</TABLE>
	<table id="example1" class="table table-bordered table-hover" border="1px">
		<form action="<?php echo site_url('C_input/insertjawaban')?>" enctype="multipart/form-data" method="POST">
                        <table class="table">

                        <tr>
                           <th>NISN Siswa </th> <td> <input type="text" name="NISN" maxlength="11" value="<?php echo $this->session->userdata('NISN') ?>"> </td>
                        </tr>

                        <tr>
                           <th> Jawaban </th> <td>  <input type="text" name="Jawaban" maxlength="400" required> </td>
                        </tr>
                          
                        </table> <br>
                        <center>
                         <input type="submit" class="btn btn-danger" value="Input"> 
                         </form>  
                 <input type="reset" class="btn btn-danger"> <br> <br>
                        


		
	</table>


</body>
</html>