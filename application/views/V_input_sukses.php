<html>
<head>
	<title>malasngoding.com<</title>
</head>
<body>
 
	<center><h1>Your file was successfully uploaded!</h1></center>
 
	<ul>
		<?php foreach ($upload_data as $item => $value):?>
			<li><?php echo $item;?>: <?php echo $value;?></li>
		<?php endforeach; ?>
	</ul>	
 
</body>
</html>