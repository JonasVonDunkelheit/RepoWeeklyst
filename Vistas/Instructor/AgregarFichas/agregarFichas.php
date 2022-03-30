<?php
  if(isset($_POST['btn'])){
    $id=$_GET['id'];
    $nombre=($_POST['nom_program']);
    $ficha=($_POST['num_ficha']);

    include("../../../bd/conexion.php");
    $sql="insert into fichas(nombre_programa,num_ficha,id_user) values('".$nombre."','".$ficha."')";  

    $resultado=mysqli_query($conexion,$sql);

    if($resultado && $result){
      echo "<script languaje='javascript'>
            alert('Los datos fueron ingresados correctamente');
            location.assign('../agregarFicha.php');</script>";
    }else {
      echo "string";"<script languaje='javascript'>
            alert('Los datos NO fueron ingresados correctamente');
            location.assign('../agregarFicha.php');</script>";
    }
    mysqli_close($conexion);
  }
?>