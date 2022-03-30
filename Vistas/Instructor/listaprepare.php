<?php
  require '../../bd/conexion.php';
  
  if(@$_POST['btn']){
      $registro = $_POST["asistencia"];
      $nombre = $_POST["nombre"];

      $insert = "INSERT INTO lista(id_aprendiz,id_registro) VALUES('$nombre','$registro')";
      $result = mysqli_query($conexion,$insert);
        
      if($result){
        echo "<script languaje='javascript'>
        alert('Los datos fueron actualizados correctamente');
        location.assign('registro.php');</script>";
      }
    }  
?>

