
<html>
<head>
    <title>Upload</title>
</head>
<body>
    <center><h1>Upload</h1></center>
    <?php echo $error;?>
 
    <?php echo form_open_multipart('C_input/aksi_upload');?>
 
    <input type="file" name="berkas" />
 
    <br /><br />
 
    <input type="submit" value="upload" />
 
</form>
 
</body>
</html>

 
<form action="" enctype="multipart/form-data">
