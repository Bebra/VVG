<?php  
 require ("header.php"); 

$lozinka = md5($_POST["Lozinka"]);

$user_name = $_POST['ime'];

//var_dump($_POST);
//echo $lozinka;







$query = "SELECT ime, lozinka FROM korisnik WHERE ime = '$user_name'";

$result = $link->query($query);

if(!$result = $link->query($query)){
die('Nesto nije ok [' . $link->error. ']');
}else{echo "ok je"."";}


//var_dump($result);

$row = $result->fetch_assoc();

if($row['ime']=="$user_name" && $row['lozinka']=="$lozinka"){
 echo "vi ste ulogirani, sacekajte malo da vas vratimo na prvu stranicu"; 
 $_SESSION['user'] = $user_name;
echo "<a href='index.php'> Povratak na pocetnu stranicu kao korisnik:".$_SESSION['user']."</a>";
} 
else{echo "niste registrtirani korisnik, sacekajte i poslat cemo vas na stranicu za registraciju"; } 
 


?>