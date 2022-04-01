<?php

  require '../../../bd/conexion.php';

  $user=$_POST['num_docu'];
  $pass=$_POST['pass'];
  session_start();
  $_SESSION['usuario']=$user;

  $consulta="SELECT*FROM usuario where num_docu='$user' and password='$pass'";
  $resultado=mysqli_query($conexion,$consulta);

  $filas=mysqli_fetch_array($resultado);

  if($filas['id_rol']==1){ 
        header('location:../../Instructor/instructor.php');
    }
    else if(($filas['id_rol'])==2){
        header('location:../../Aprendiz/aprendiz.php');
    }
?>