<?php
include 'connection.php';
$user_name=$_POST['user'];
$password=$_POST['password'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];

//$user_name="angeloroncal@developeru.net";
//$password="12345678";

$query=$connection->prepare("INSERT INTO `users`(`username`, `password`, `mail`, `phone`) VALUES (?,?,?,?)");
$query->bind_param('ssss',$user_name,$password,$mail,$phone);
$query->execute();

$result = $query->get_result();
if ($fila = $result->fetch_assoc()) {
         echo json_encode($fila,JSON_UNESCAPED_UNICODE);     
}
$query->close();
$connection->close();
?>