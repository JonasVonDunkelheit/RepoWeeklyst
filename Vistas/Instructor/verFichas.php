<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/verFichas.css">
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
        $sql="select * from fichas";        
        $resultado=mysqli_query($conexion,$sql);
    ?>
    <div class="contain">
        <div class="cont">            
            <div class="back"><a href="verFichas.php"><i class="fa-solid fa-circle-arrow-left"></i> Regresar</a></div>
            <div><h2>Lista</h2></div>
        </div>
        <table>
            <thead>
                <th>Nombre del programa</th>
                <th colspan=2>Número de ficha</th>
            </thead>
            <tbody>
                <?php
                    while($filas=mysqli_fetch_assoc($resultado)){                    
                ?>
                <tr>                    
                    <td><?php echo $filas['nombre_programa']?></td>
                    <td class="col"><?php echo $filas['num_ficha']?></td>
                    <td class="col"><?php echo "<a href='lista.php?id=".$filas['id_ficha']."'><i class='fa-solid fa-arrow-up-right-from-square'></i> Ver lista</a>"; ?></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
        <?php 
            mysqli_close($conexion);
        ?>
    </div>
    <footer>
        Todos los derechos reservados - ©Weeklyst 2020
    </footer>
</body>
</html>