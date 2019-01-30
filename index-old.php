<?php

if (!isset($_POST['meni'])) {$_POST['menu'] = 0;}
print '



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta keywords="">
	<meta description="">


</head>

<body>


	<header>
	';
	include ("nav.php");

	print '

	</header>



	<main> ';

		if($_GET['menu']==1)
		{
			print '<h1>O nama </h1>';
		}
		else if($_GET['menu']==2)
		{
			print '<h1>kontakt</h1>';
			include ("contact.php");
		}

		else if($_GET['menu']==3)
		{
			print '<h1>galerija</h1>';
		}





	print ' 
	</main>


	<footer>
	</footer>






</body>
</html>

';

 ?>