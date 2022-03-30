<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/contactenos.css">
    <title>Weeklyst</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="../../img/logo.png" class="logoNav">
            </div>
            <div class="izq">
                  <ul>
                    <li><a href="../../index.php">Inicio</a></li>
                    <li><a href="SobreNosotros.php">Sobre nosotros</a></li>
                    <li><a href="Contactos.php">Contacto</a></li>
                 </ul>
            </div>
            <div class="der">
            <a href="../../Vistas/Forms/login.php">Ingresar</a>
            <a href="../../Vistas/Forms/register.php">Registrarse</a>
            </div>
        </nav>
    </header>
          <form class=''id="formulario">  
        <label for="">Email:</label><br>
        <input id="email" name="email" type="email" placeholder="ejemplo@email.com"><br>
       
        <label for="">Tefono :</label><br>
        <input id="tel" name="tel" type="tel" placeholder="numero"><br>
            <input type="submit" value="Enviar datos"><br>
            </form>
    <footer>
        Todos los derechos reservados - ©Weeklyst 2020
    </footer>
    <script src="../../js/validacionContact.js"></script>

    
</body>
</html>