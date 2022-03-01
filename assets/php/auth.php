<?php
include 'connect.php';
session_start();
if (isset($_POST['login']) && isset($_POST['pass']))
{
    $login = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['login']));
    $pass = md5(trim($_POST['pass']));
    $sql = $mysqli->query("SELECT * FROM `user` WHERE login = '$login' AND password = '$pass' LIMIT 1");
    if (mysqli_num_rows($sql) == 1){
        $row = mysqli_fetch_assoc($sql);
        $_SESSION['UID'] = $row['UID'];
        $_SESSION['Name'] = $row['Name'];
        $_SESSION['login'] = $row['login'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['img'] = $row['image'];
        setcookie("Cookiedd", $row['login'], time()+60*60*24*10);
    }
    else{
        header("Location: ../../login.php");
    }
    if (isset($_SESSION['UID'])){
        header("Location: ../../lk.php");
   } else {
       $login = '';
          if (isset($_COOKIE['Cookiedd'])){
                $login = htmlspecialchars($_COOKIE['Cookiedd']);
        }
    }

}
?>