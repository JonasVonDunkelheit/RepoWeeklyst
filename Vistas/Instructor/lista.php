<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/lista.css">
    <script src="https://kit.fontawesome.com/a0ed1d4853.js" crossorigin="anonymous"></script>
    <title>Weeklyst</title>
</head>
<body>
    <?php 
        include '../navbaruser.php';                
    ?>
    <?php
        include ('../../bd/conexion.php');
        //Select
        $numFicha=$_POST['num_ficha'];

        $sql="select * from usuario where id_ficha='".$numFicha."'";
        
        $resultado=mysqli_query($conexion,$sql);
        
    ?>
    <div class="contain">
        <div class="cont">            
            <div class="back"><a href="preficha.php"><i class="fa-solid fa-circle-arrow-left"></i> Regresar</a></div>
            <div><h2>Lista</h2></div>
        </div>
        <table>
            <thead>
                <th>Aprendiz</th>
                <th>Asistencia</th>
            </thead>
            <tbody>
                <?php
                    while($filas=mysqli_fetch_assoc($resultado)){    
                ?>
                <form action="listaprepare.php" method="post">
                    <?php
                        $sql1="select * from fichas where id_ficha";
                        $resultado1=mysqli_query($conexion,$sql1);
                    ?>
                <tr>                    
                    <td><input type="hidden" value="<?php echo $filas['apellido']?> <?php echo $filas['nombre']?>" name="nombre"><?php echo $filas['apellido']?> <?php echo $filas['nombre']?></td>
                    <td><select name="asistencia">
                        <option value="1">Asistencia</option>
                        <option value="2">Falla</option>
                    </select></td>
                </tr>
                <?php 
                    }
                ?>
                <tr>
                    <td colspan=2><input type="submit" name="btn" value="Guardar"></td>
                </tr>
                </form>                
            </tbody>
        </table>
        
    </div>
    <footer>
        Todos los derechos reservados - ©Weeklyst 2020
    </footer>
</body>
</html>