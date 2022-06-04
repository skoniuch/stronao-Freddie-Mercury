<?php
$polonczenie = mysqli_connect("localhost", "root","","kontakt");
$imie = $_POST['imię'];
$nazwisko = $_POST['nazwisko'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$wiadomosc = $_POST['wiadomość'];
$zapytanie = "INSERT INTO 'kontakt' values (null, '$imie', '$nazwisko', '$mail', '$tel', '$wiadomosc')";
mysqli_select_db($polonczenie, 'kontakt');
if(mysqli_select_db == false)
echo("Nie powiodło się")
else
echo("Formularz został wysłany poprawnie")
mysqli_close($polonczenie);
?>