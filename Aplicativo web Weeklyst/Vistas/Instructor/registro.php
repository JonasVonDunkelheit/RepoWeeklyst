<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/lista.css">
    <link rel="stylesheet" href="../../css/fichastable1.css">
    <script src="https://kit.fontawesome.com/a0ed1d4853.js" crossorigin="anonymous"></script>
    <title>Weeklyst</title>
</head>
<body>
<?php 
        include '../navbaruser.php'; 
    ?>
    <?php
        include ('../../bd/conexion.php');

        $sql="select * from lista";
        
        $resultado=mysqli_query($conexion,$sql);
        
    ?>
    <div class="container">
    <table>
            <thead>
                <th>Aprendiz</th>
                <th>Asistencia</th>
            </thead>
            <tbody>
                <?php                    
                    while($filas=mysqli_fetch_assoc($resultado)){
                    
                ?>
                    
                    
                <tr>                    
                    <td><input type="hidden" value="<?php echo $filas['aprendiz']?>" name="nombre"><?php echo $filas['aprendiz']?></td>
                    <td><?php echo $filas['registro']?></td>
                </tr>
                <?php 
                    }
                    
                ?>
                
    </div>
    
    <footer>
        Todos los derechos reservados - ©Weeklyst 2020
    </footer>
</body>
</html>