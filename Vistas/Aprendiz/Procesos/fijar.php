<?php
  session_start();

  if($_SESSION['usuario']){
    if(isset($_POST['btn'])){
        $idFicha=($_POST['num_ficha']);
        $idUser=($_POST['docu']);
    
        include("../../../bd/conexion.php");
        $sql="update usuario set id_ficha='".$idFicha."' where id_usuario='".$idUser."'";  
        
        $resultado=mysqli_query($conexion,$sql);    
    
        if($resultado){
          echo "<script languaje='javascript'>
                alert('Los datos fueron ingresados correctamente');
                location.assign('../fijarFicha.php');</script>";
        }else {
          echo "string";"<script languaje='javascript'>
                alert('Los datos NO fueron ingresados correctamente');
                location.assign('../fijarFicha.php');</script>";
        }
        
        mysqli_close($conexion);
      }
  }  
?>