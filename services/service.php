<?php
$url = "127.0.0.1";
$database="helados";
$username="gerente";
$password="root";

$conn = mysqli_connect($url, $username, $password, $database);
if(!$conn)
{
die("fallo" .$conn->connect_error);
}

$sql="Select * from productos";
$resul = mysqli_query($conn, $sql);
$rows=array();

if(mysqli_num_rows($resul)>0){

while($r=mysqli_fetch_assoc($resul)){
    array_push($rows, $r);
}

print json_encode($rows);

} else{
    echo "No data";
} 
mysqli_close($conn);
?>