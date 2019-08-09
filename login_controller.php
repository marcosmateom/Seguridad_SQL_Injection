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
#Escapar los datos ej. ' OR '1'='1
#$usr = $conexion->real_escape_string($usr);
#$pass = $conexion->real_escape_string($pass);


$sql = "SELECT * FROM users WHERE user ='$usr' AND password='$pass'" ;

$result = $conexion->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        //$user = $row["name"];
        $nombrec = $row["name"];
        header("Location: welcome.php/?user=$nombrec", true);
        //echo "id: " . $row["user_id"]. " - Name: " . $row["name"]. " " . $row["password"]. "<br>";
    }
} else {
    header("Location: index.php?login=false", true);
}

/*
// Login Utilizando un SP
$sql1 ="CALL login('$usr','$pass',@res)";
$sql2 ="SELECT @res" ;
$conexion->query($sql1);
$result = $conexion->query($sql2);

// Verificar respuesta del SP
$row = mysqli_fetch_array($result);
if ($row[0]) { 
    //Obtener el nombre para la página de bienvenida
    $sql3 = "SELECT name from users where user ='$usr'";
    $res = $conexion->query($sql3) or die("Parece que algo ha salido mal!");
    $row = mysqli_fetch_array( $res );
    //$_SESSION['name'] = $row[0];
    $nombrec = $row["name"];
    header("Location: welcome.php/?user=$nombrec", true);
}*/

 mysqli_close($conexion);
