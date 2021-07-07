<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<h1>Welcome to Website</h1><br>
		<p>Username : <?php echo $_SESSION['username']; ?></p>
	</header>
	<ul>
		<li><a href="index.php">Beranda</a></li>
		<?php for($i=1; $i <= 4; $i++){?>
			<li><a href="link<?=$i;?>.php">Link <?php echo $i; ?></a></li>
		<?php  }?>
		<li><a href="logout.php">Logout</a></li>
	</ul>