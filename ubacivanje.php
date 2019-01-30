<?php
/*
var_dump($_POST);
echo $_POST["Lozinka"];

echo $_POST["drzava"];

echo $lozinka;
*/
require ("dbconnect.php");
$lozinka = md5($_POST["Lozinka"]);
$ime =$_POST["ime"];
$prezime =$_POST["prezime"];
$email =$_POST["e-mail"];
$drzava =$_POST["drzava"];
$datumrodjenja =$_POST["datumrodjenja"];
$grad =$_POST["grad"];
$ulica =$_POST["ulica"];

      
//$query = "INSERT INTO `korisnik`(`ime`, `prezime`, `e-mail`, `drzava_id`, `grad`, `ulica`, `datumrodjenja`, `lozinka`)VALUES  ($._POST['ime'],$_POST["prezime'],$._POST['e-mail'],$._POST['drzava'],$._POST['grad'],$._POST['ulica'],$._POST['datumrodjenja'],$lozinka)";


$query = "INSERT INTO korisnik (ime, prezime, mail, drzava_id, grad, ulica, datumrodjenja, lozinka) VALUES ('$ime','$prezime','$email','$drzava', '$grad', '$ulica' , '$datumrodjenja','$lozinka')";


$result = mysqli_query($link,$query);
        

echo $query;


?>