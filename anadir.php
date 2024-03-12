<?php
require_once "autoloader.php";
 
$datos = new Connection();
$conn= $datos->getConn();

if (count($_POST) > 0) {
    $id=$_POST["id"];
    $company=$_POST["company"];
    $investment=$_POST["investment"];
    $date=$_POST["date"];
    $active=$_POST["active"];
    $query = "INSERT INTO `Investment`(`Id`, `Company`, `Investment`, `Date`, `Active`) VALUES ('$id', '$company', '$investment', '$date', '$active')";
    mysqli_query($conn, $query);
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir campo</title>
</head>
<body>
    <form action="" method="POST" >
        <label for="id">ID</label>
        <input type="text" id="id" name="id" value="" required>
        
        <label for="company">Company</label>
        <input type="text" id="company" name="company" value="" required>
        
        <label for="investment">Investment</label>
        <input type="number" id="investment" name="investment" value="" required>
        
        <label for="date">Date</label>
        <input type="date" id="date" name="date" value="" required>
        
        <label for="active">Active</label>
        <select id="active" name="active" required>
            <option value="1">Active</option>
            <option value="0">No Active</option>
        </select>
        <input type="submit" value="Añadir">
    </form>

    
</body>
</html>