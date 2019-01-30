<?php  
 require ("dbconnect.php"); ?>
<form action="ubacivanje.php" method="post">
  Ime:<br>
  <input type="text" name="ime"><br>
  Prezime:<br>
  <input type="text" name="prezime"><br>
  E-mail:<br>
  <input type="email" name="e-mail"><br>
  Lozinka:<br>
  <input type="password" name="Lozinka"><br>
  Ulica:<br>
  <input type="text" name="ulica"><br>
  Grad:<br>
  <input type="text" name="grad"><br>
  Datum rođenja:<br>
  <input type="date" name="datumrodjenja"><br>

  Država: <br>
  <select id="drzava_id" name="drzava">
	<?php
	
	if (mysqli_connect_errno())
  		{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}

	$sql="SELECT id,drzava_ime FROM drzave" ;
	$result=mysqli_query($link,$sql);


	foreach($result as $key =>$value)
	{?>
  <option value="<?=$value['id']?>"><?=$value['drzava_ime']?></option>    
	<?php }

	?>

</select>
<input type="submit">
</form>


