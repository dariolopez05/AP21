<?php

require_once "autoloader.php";

$id=$_GET['id'];

$datos = new Connection();
$conn= $datos->getConn();

$query="DELETE FROM `Investment` WHERE Id = $id";
mysqli_query($conn, $query);

header("location: index.php");

?>