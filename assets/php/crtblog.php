<?
include 'connect.php';
include 'auth.php';
$blogtext = $_POST['text-blog'];
$datetext = date("Y-m-d H:i:s");
$uid = $_SESSION['UID'];

if($mysqli->query("INSERT INTO `messages`(`userid`,`messages`,`date`) VALUES ('$uid', '$blogtext', '$datetext')")){
    header('location: /index.php');
} else{
    echo "Ошибка: " . $mysqli->error;
}
?>