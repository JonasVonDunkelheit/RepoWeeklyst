<?php
    include ('../../bd/conexion.php');       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/addficha.css">
    <script src="https://kit.fontawesome.com/a0ed1d4853.js" crossorigin="anonymous"></script>
    <title>Weeklyst</title>
</head>
<body>
    <?php 
        include '../navbaruser.php'; 
    ?>
    <?php
        if(isset($_POST['btn'])){

            $id=$_POST['id'];        
            $nombre_prog=$_POST['nom_program'];
            $ficha=$_POST['num_ficha'];

            $sql="update fichas set nombre_programa='".$nombre_prog."',num_ficha='".$ficha."' where id_ficha='".$id."'";
            $resultado=mysqli_query($conexion,$sql);

            if($resultado){
                echo "<script languaje='javascript'>
                      alert('Los datos fueron actualizados correctamente');
                      location.assign('agregarFicha.php');</script>";
              }else {
                echo "<script languaje='javascript'>
                      alert('Los datos NO fueron actualizados correctamente');
                      location.assign('agregarFicha.php');</script>";
              }
              mysqli_close($conexion);
        }else{

            $id=$_GET['id'];
            $sql="select * from fichas where id_ficha='".$id."'";
            $resultado=mysqli_query($conexion,$sql);

            $fila=mysqli_fetch_assoc($resultado);            
            $nombre=$fila["nombre_programa"];
            $num=$fila["num_ficha"];

            mysqli_close($conexion);
    ?>
    <div class="contain">
        <div>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <div class="back"><a href="agregarFicha.php"><i class="fa-solid fa-circle-arrow-left"></i> Regresar</a>
            <label for="" class="title">Agregar Fichas</label></div><br><br>
                <label for="">Nombre del programa de formación</label><br>
                <input type="text" name="nom_program" value="<?php echo $nombre;?>"><br>
                <label for="">Número de Ficha</label><br>
                <input type="text" name="num_ficha" value="<?php echo $num;?>"><br><br>

                <input type="hidden" name="id" value="<?php echo $id?>;">

                <input type="submit" name="btn" value="Actualizar">
            </form>            
            <?php 
                }
            ?>
            </tbody>
        </table>        
        </div>
    </div>
    <footer>
        Todos los derechos reservados - ©Weeklyst 2020
    </footer>
</body>
</html>