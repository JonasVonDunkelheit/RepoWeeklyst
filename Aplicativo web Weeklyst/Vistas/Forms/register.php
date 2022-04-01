<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/register.css">
    <title>Registrarse</title>
</head>
<body>
    <?php 
        include '../navbar.php'; 
    ?>
    <div class="contain">
        <form action="Procesos/procesoRegistro.php" id="formulario" method="post"id="formulario" >
            <label class="title">Registrarse | </label>
            <a href="login.php" class="link">Ya tengo una cuenta</a><br><br>
            <label for="">Nombre</label><br>
            <input id="nombre" type="text" name="nombre" placeholder="Ingrese su nombre completo"><br>
            <label for="">Apellidos</label><br>
            <input id="apellido" type="text" name="apellidos" placeholder="Ingrese sus apellidos"><br>
            <label for="">Tipo de documento</label><br>
            <select name="tipo_docu" id="tipocedula" >
                <option value="">--Seleccionar--</option>
                <option value="Tarjeta de Identidad">Tarjeta de identidad</option>
                <option value="Cédula de Ciudadanía">Cédula de ciudadanía</option>
                <option value="Cédula Extranjera">Cédula extranjera</option>
            </select><br>
            <label for="">Número de documento</label><br>
            <input id="documento" type="text" name="num_docu" placeholder="Ingrese su número de documento"><br>
            <label for="">Rol</label><br>
            <select name="roles" id="rol">
                <option value="">--Seleccionar--</option>
                <option value="1">Instructor</option>
                <option value="2">Aprendiz</option>                
            </select><br>
            <label for="">Correo electrónico</label><br>
            <input id="email" type="email" name="correo" placeholder="Ingrese su correo electrónico"><br>
            <label   for="">Contraseña</label><br>
            <input id="Contraseña"  type="password" name="pass" placeholder="Cree su contraseña"><br>
            <input type="submit" name="btn" value="Registrarse">
        </form>
    </div>
    <footer>
        Todos los derechos reservados - ©Weeklyst 2020
    </footer>
    <!--<script src="../../js/validacionRegistro.js"></script>-->
</body>
</html>
</body>
</html>