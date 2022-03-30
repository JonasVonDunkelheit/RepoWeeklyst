<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/fichaPage.css">
    <script src="https://kit.fontawesome.com/a0ed1d4853.js" crossorigin="anonymous"></script>
    <title>Weeklyst</title>
</head>
<body>
    <?php 
        include '../navbaruser.php';
        //Select
        include ('../../bd/conexion.php');
        $sql="select * from usuario where id_usuario";    
        $resultado=mysqli_query($conexion,$sql);
    ?>
    <div class="container">
        <div class="fichas">
            <a href="verFichas.php"><div><label><i class="fa-solid fa-eye"></i> Ver Fichas</label></div></a>
            <br>            
            <p class="pf">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui voluptates atque vero harum explicabo doloribus deserunt eveniet nulla iusto porro nemo, voluptatum ab commodi velit. Quos quas repellendus fugit quis!</p><br>
        </div>
        <?php
            if($filas=mysqli_fetch_assoc($resultado)){                    
        ?>
        <div class="addF">
            <a href="agregarFicha.php"><div><label><i class="fa-solid fa-folder-plus"></i> Agregar Ficha</label></div></a>
            <br>
            <p class="pf">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui voluptates atque vero harum explicabo doloribus deserunt eveniet nulla iusto porro nemo, voluptatum ab commodi velit. Quos quas repellendus fugit quis!</p><br>
        </div>
        <?php
            }
        ?>
    </div>
    <footer>
        Todos los derechos reservados - ©Weeklyst 2020
    </footer>
</body>
</html>