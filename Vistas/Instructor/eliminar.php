<?php
    $id=$_GET['id'];
    include ('../../bd/conexion.php');

    $sql="delete from fichas where id_ficha='".$id."'";
    $resultado=mysqli_query($conexion,$sql);

    if($resultado){
        echo "<script languaje='javascript'>
        alert('Los datos fueron eliminados correctamente');
        location.assign('agregarFicha.php');</script>";
    }else {
    echo "string";"<script languaje='javascript'>
            alert('Los datos NO fueron eliminados correctamente');
            location.assign('agregarFicha.php');</script>";
    }
    mysqli_close($conexion);
?>