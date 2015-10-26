<?php 
$nombre=$_POST['nombre'];
$mensaje= $_POST['message'];
$checkMessage =$_POST['msj'];
$checkRec =$_POST['rec'];
$submit =$_POST['Submit'];
$date = "";

$fileName = "data.csv";
$filePointer = fopen($fileName, 'a') or die ("no se puede abrir ");

fwrite($filePointer, $nombre.",".$mensaje.",".$checkMessage.",".$checkRec.",".$submit.",".$date);
		
fclose($filePointer);
		
print("nombres salvados");


?>