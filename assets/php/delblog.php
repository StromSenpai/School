<?php
include 'connect.php';
$idmess = $_POST['idmess'];
if($mysqli->query("DELETE FROM `messages` WHERE `id` = $idmess")){
   header('location: /index.php');
} else{
    echo "Ошибка: " . $mysqli->error;
}
?>