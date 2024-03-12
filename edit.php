<?php
 require_once "autoloader.php";
 
 $id= isset($_GET['id']) ? $_GET['id'] : null;
 $datos = new Connection();
 $conn= $datos->getConn();

 $query1="SELECT * FROM `Investment` WHERE Id = $id";
 $result = mysqli_query($conn, $query1);

while($value = $result->fetch_array(MYSQLI_ASSOC)){
            $cliente = $value;
}

if (count($_POST) > 0) {
    $id=$_POST["id"];
    $company=$_POST["company"];
    $investment=$_POST["investment"];
    $date=$_POST["date"];
    $active=$_POST["active"];
    $query= "UPDATE `Investment` SET `Id`='$id',`Company`='$company',`Investment`='$investment',`Date`='$date',`Active`='$active' WHERE Id = $id";
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
    <title>Formulario de Edición</title>
</head>
<body>
    <form action="" method="POST" >
        <label for="id">ID</label>
        <input type="text" id="id" name="id" required value="<?= $cliente["Id"]; ?>">
        
        <label for="company">Company</label>
        <input type="text" id="company" name="company" required value="<?= $cliente["Company"]; ?>">
        
        <label for="investment">Investment</label>
        <input type="number" id="investment" name="investment" required value="<?= $cliente["Investment"]; ?>">
        
        <label for="date">Date</label>
        <input type="date" id="date" name="date" required value="<?= $cliente["Date"]; ?>">
        
        <label for="active">Active</label>
        <select required id="active" name="active">
            <option value="1">Active</option>
            <option value="0">No Active</option>
        </select>
        <input type="submit" value="Editar">
    </form>

    
</body>
</html>