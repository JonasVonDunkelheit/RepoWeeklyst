<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/addficha.css">
    <link rel="stylesheet" href="../../css/fichastable.css">
    <script src="https://kit.fontawesome.com/a0ed1d4853.js" crossorigin="anonymous"></script>

    <script type="text/javascript">
        function confirmar(){
            return confirm('¿Quieres eliminar esta ficha? Los datos se borrarán permanentemente');
        }
    </script>

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
        <div>
            <form action="AgregarFichas/agregarFichas.php" method="post">
            <div class="back"><a href="fichas.php"><i class="fa-solid fa-circle-arrow-left"></i> Regresar</a>
            <a class="title" href="asociar.php">Asociar Fichas</a></div><br><br>
                <label for="">Nombre del programa de formación</label><br>                
                <input type="text" name="nom_program" placeholder="Escriba el nombre del programa"><br>
                <label for="">Número de Ficha</label><br>
                <input type="text" name="num_ficha" placeholder="Ingrese el número de la ficha correspondiente al programa"><br>                
                <input type="submit" name="btn" value="Agregar">
            </form>
            <table>
            <thead>                
                <th>Número de ficha</th>
                <th>Nombre del programa de formación</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                
                <?php
                    while($filas=mysqli_fetch_assoc($resultado)){                    
                ?>  
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <tr>          
                    <td class="col"><?php echo $filas['num_ficha']?></td>
                    <td><?php echo $filas['nombre_programa']?></td>
                    <td class="col">
                        <?php echo "<a href='editar.php?id=".$filas['id_ficha']."'><i class='fa-solid fa-pencil'></i> Editar</a>"; ?>
                        -
                        <?php echo "<a href='eliminar.php?id=".$filas['id_ficha']."' onclick='return confirmar()'><i class='fa-solid fa-trash-can'></i> Eliminar</a>" ;?>                                                
                    </td>
                    
                </tr>
                <?php 
                    }                    
                ?>
                </form>                
            </tbody>
        </table>
        <?php 
            mysqli_close($conexion);
        ?>
        </div>
    </div>
    <footer>
        Todos los derechos reservados - ©Weeklyst 2020
    </footer>
</body>
</html>