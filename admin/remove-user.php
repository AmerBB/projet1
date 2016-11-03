<?php 
require_once '../dbconfig.php';
$id=$_POST['id'];
$result = $db_con->exec("DELETE from user where id=$id");

echo $result;
?>