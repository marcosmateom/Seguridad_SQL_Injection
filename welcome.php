<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1> Bien Venido <?php echo $_GET['user']; ?></h1>

    <form action="../search_controller.php" method = "POST">
        <div class="container">
            <label for="id"><b>Ingrese su Id</b></label>
            <br>
            <input type="text" placeholder="Ingrese el id" name="id" id="id" required>
            <br>

            <button type="submit">Buscar</button>
        </div>
    </form>
    
</body>
</html>