<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('School.localhost', 'root', '', 'schooldb');
if (mysqli_connect_errno()) {
    die('Ошибка подключения: ' . mysqli_connect_error()); 
  }
?>