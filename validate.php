<?php
include 'connection.php';
$user_name=$_POST['user'];
$password=$_POST['password'];

//$user_name="angeloroncal@developeru.net";
//$password="12345678";

$query=$connection->prepare("SELECT * FROM users WHERE username=? AND password=?");
$query->bind_param('ss',$user_name,$password);
$query->execute();

$result = $query->get_result();
if ($fila = $result->fetch_assoc()) {
         echo json_encode($fila,JSON_UNESCAPED_UNICODE);     
}
$query->close();
$connection->close();
?>