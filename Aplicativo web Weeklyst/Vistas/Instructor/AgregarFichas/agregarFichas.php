<?php
  session_start();

  if(isset($_POST['btn'])){
    $nombre=($_POST['nom_program']);
    $ficha=($_POST['num_ficha']);

    include("../../../bd/conexion.php");
    $sql="insert into fichas(nombre_programa,num_ficha) values('".$nombre."','".$ficha."')";
    
    $resultado=mysqli_query($conexion,$sql);

    if($resultado){
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