<?php 
include("function.php");
$id = $_GET['id'];
delete('personas','id',$id);
header("location:darBaja.php");
$sql = "DELETE FROM personas WHERE $id"


?>

