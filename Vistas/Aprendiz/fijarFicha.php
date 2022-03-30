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
        
    ?>
    <div class="contain">
        <div>
            <form action="Procesos/fijar.php" method="post">
            <div class="back"><a href="fichas.php"><i class="fa-solid fa-circle-arrow-left"></i> Regresar</a>
            <label for="" class="title">Fijar una Ficha</label></div><br><br>
            <label for="">Número de Ficha</label><br>
                <select name="num_ficha">
                    <?php 
                        $sql="select * from fichas";        
                        $resultado=mysqli_query($conexion,$sql);
                    ?>

                    <?php foreach($resultado as $opciones): ?>

                        <option value="<?php echo $opciones['id_ficha']?>"><?php echo $opciones['num_ficha']?></option>

                    <?php endforeach ?>
                </select><br>
            <label for="">Número de Documento</label><br>
                <select name="docu">
                    <?php 
                        $sql1="select * from usuario where id_rol=2";
                        $result=mysqli_query($conexion,$sql1);
                    ?>

                    <?php foreach($result as $opc): ?>

                        <option value="<?php echo $opc['id_usuario']?>"><?php echo $opc['num_docu']?></option>

                    <?php endforeach ?>
                </select><br>
                <input type="submit" name="btn" value="Guardar">
                
            </form>            
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