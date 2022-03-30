<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/login.css">
    <title>Ingresar</title>
</head>
<body>
    <?php 
        include '../navbar.php'; 
    ?>
    <div class="contain">
        <form action="Procesos/procesoLogin.php" method="post" id="formulario">
            <label class="title">Ingresar | </label><a href="register.php" class="link">No tengo una cuenta</a><br><br>
            <label for="">Número de documento</label><br>
            <input id="documento" type="text" name="num_docu" placeholder="Ingrese su número de documento"><br>
            <label for="">Contraseña</label><br>
            <input id="Contraseña" type="password" name="pass" placeholder="Ingrese su contraseña"><br>
            <a href="#" class="link">Olvidé mi contraseña</a><br>
            <input type="submit" name="btn" value="Ingresar">
        </form>
    </div>
    <footer>
        Todos los derechos reservados - ©Weeklyst 2020
    </footer>
    <script src="../../js/validacionLogin.js"></script>
</body>
</html>
</body>
</html>