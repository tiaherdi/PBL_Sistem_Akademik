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
  <form action=" <?php echo site_url('C_tampil/index'); ?> "> <input type="submit" name="index" value="Home" class="btn btn-btn danger btn-btn danger"> </form><br> <br></th>

  <table class="table">
    <form action="<?php echo site_url('C_input/insertsoalpengayaan')?>" enctype="multipart/form-data" method="POST">
                        <table class="table">
                        <tr>
                          <tr>
                           <th> ID Pembelajaran </th> <td>  <input type="text" name="ID_pm" maxlength="400" required> </td>
                        </tr>
                        <tr>
                           <th> Pertanyaan </th> <td>  <input type="text" name="Soal" maxlength="400" required> </td>
                        </tr>
                          
                        </table> <br>
                        <center>
                         <input type="submit" class="btn btn-danger" value="Input"> 
                         </form>  
                 <input type="reset" class="btn btn-danger"> <br> <br>
                        


    
  </table> <br>
<center>

  <TABLE id="example1" class="table table-bordered table-hover" border="1px">

    <thead class="danger">
      <tr class="danger">
        <th>ID Pengayaan</th>
        <th>ID Pembelajaran</th>
        <th>Soal</th>
      
      </tr>
    </thead>

    <tbody>
    <!-- CARA1 -->
    <?php
      foreach ($datauser as $key) { 
    ?>
      <tr>
        <th><?php echo $key->ID_pengayaan; ?></th>
        <th><?php echo $key->ID_pm; ?></th>
        <th><?php echo $key->Soal; ?></th>
  
      <?php
      }
      
  
    ?>
    </tbody>
  </TABLE>


</body>
</html>