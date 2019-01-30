 <?php
require ("header.php"); 

 if (!isset($_GET['menu'])) 

 	{$_GET['menu'] = 0;}
print '


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta keywords="">
	<meta description="">
	<link rel="stylesheet" type="text/css" href="style.css">

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
			include ("galerija.php");
		}

		else if($_GET['menu']==5)
		{
		echo "Logout Successfully ";
  		session_destroy();
  		header("Location: index.php");;
		}

		else if($_GET['menu']==6)
		{
			include ("registracija.php");
		}

		else if($_GET['menu']==7)
		{
			include ("login.php");
		}





	print ' 
	</main>


	<footer>
	</footer>






</body>
</html>

';

 ?> 
