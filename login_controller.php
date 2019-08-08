<?php
session_start();
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "injection";
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$usr = $_POST['usuario'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users WHERE user ='$usr'" ;
$result = $conexion->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //$user = $row["name"];
        $psw = $row["password"];
        if ($psw = $pass) {
            header('Location: welcome.php/?user=arche' , true);
        }
        //echo "id: " . $row["user_id"]. " - Name: " . $row["name"]. " " . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}
 mysqli_close($conexion); 
 ?>