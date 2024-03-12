<?php

class Cartera{
    protected array $clientes = [];

    function drawList(){
        $conn = mysqli_connect('db', 'root', 'test', "AP21");
                        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }        


        $query = 'SELECT * From Investment';
        $result = mysqli_query($conn, $query);

            echo '<table class="table table-striped">';
            echo '<thead><tr><th>Id</th><th>Company</th><th>Investment</th><th>Date</th><th>Active</th><th>Actions</th></tr></thead>';
            while($value = $result->fetch_array(MYSQLI_ASSOC)){
                echo '<tr>';
                foreach($value as $element){
                    echo '<td>' . $element . '</td>';
                }
                    echo '<td>' . '<a href="delete.php?id=' . $value["Id"] . '"><img src="img/del_icon.png" alt="" width=50px height=50px ></a>' . '</td>';
                    echo '<td>' . '<a href="edit.php?id=' . $value["Id"] . '"><img src="img/edit_icon.png" alt="" width=50px height=50px ></a>' . '</td>';
                    echo '</tr>';
            }
            echo '</table>';
            $result->close();
            mysqli_close($conn);
    }

    function delete($id){
        $conn = mysqli_connect('db', 'root', 'test', "AP21");
                        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }        

        $query="DELETE FROM `Investment` WHERE Id = $id";
        $result = mysqli_query($conn, $query);

    }

    public function getCliente($id)
    {
        $conn = mysqli_connect('db', 'root', 'test', "AP21");
                        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }        

        $query="SELECT * FROM `Investment` WHERE Id = $id";
        $result = mysqli_query($conn, $query);

        while($value = $result->fetch_array(MYSQLI_ASSOC)){
            return $value;
        }
        
    }

    public function anadir($datos){
        $conn = mysqli_connect('db', 'root', 'test', 'AP21');
        $id=$datos["id"];
        $company=$datos["company"];
        $investment=$datos["investment"];
        $date=$datos["date"];
        $active=$datos["active"];
                        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
    
        $query = "INSERT INTO `Investment`(`Id`, `Company`, `Investment`, `Date`, `Active`) VALUES ('$id', '$company', '$investment', '$date', '$active')";
        $result = mysqli_query($conn, $query);
    }

    function update($id, $datos){
        $conn = mysqli_connect('db', 'root', 'test', "AP21");
        $id=$datos["id"];
        $company=$datos["company"];
        $investment=$datos["investment"];
        $date=$datos["date"];
        $active=$datos["active"];
                        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }        

        $query= "UPDATE `Investment` SET `Id`='$id',`Company`='$company',`Investment`='$investment',`Date`='$date',`Active`='$active' WHERE Id = $id";
        $result = mysqli_query($conn, $query);
    }

    public function getClientes($num)
    {
        return $this->clientes[$num];
    }

    public function setClientes($clientes, $num)
    {
        $this->clientes[$num] = $clientes;
    }

    function isVip($inv){
            if ($inv > 1000000) {
                $vip = "<td class='vip'>";
            } else {
                $vip = "<td class='novip'>";
            }
            return $vip;
        } 

    }

?>