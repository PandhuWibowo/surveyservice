<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $title;?></title>
</head>
<body>
	halo, ini admin <?php echo $this->session->userdata('nama');?><br>

	<a href="<?=base_url('report');?>">Report</a>
	
	<br>
	<a href="#">Sign Out</a>
</body>
</html>
