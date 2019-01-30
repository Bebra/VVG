
 <?php



 if (isset($_SESSION['user'])) {
 print '
   <nav>
			<a href="index.php?menu=0"> Početna </a>
			<a href="index.php?menu=1"> O nama </a>
			<a href="index.php?menu=2"> Kontakt </a>
			<a href="index.php?menu=3"> Galerija </a>
			Vi ste '; echo $_SESSION['user']; print '
			<a href="index.php?menu=5"> Log out </a>


</nav>';
 

 } else {
   print '
   <nav>
			<a href="index.php?menu=0"> Početna </a>
			<a href="index.php?menu=1"> O nama </a>
			<a href="index.php?menu=2"> Kontakt </a>
			<a href="index.php?menu=3"> Galerija </a>


			<a href="index.php?menu=6"> Registracija</a>
			<a href="index.php?menu=7"> Login</a>

</nav>';
   
 }






 ?>

