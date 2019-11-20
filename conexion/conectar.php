<?php
$host = 'localhost:3306';
$user = 'gerente';
$pass = 'root';
$db = 'helados';

$conn = mysqli_connect($host,$user,$pass,$db);

if(!$conn){
    die('No se pudo conectar: '.mysqli_error());
}
?>