<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="login_controller.php">
        <div class="container">
            <label for="usuario"><b>Usuario</b></label>
            <br>
            <input type="text" placeholder="Ingrese el usuario" name="usuario" required>
            <br>

            <label for="pass"><b>Contraseña</b></label>
            <br>
            <input type="password" placeholder="Ingrese su contraseña" name="pass" required>
            <br>

            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>