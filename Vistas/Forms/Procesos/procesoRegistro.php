<?php
  require '../../../bd/conexion.php';

    if(($_POST['roles'])==1){
      header('location:../../Instructor/instructor.php');
    }
    else if(($_POST['roles'])==2){
      header('location:../../Aprendiz/aprendiz.php');
    }

    mysqli_select_db($conexion,'weeklystbd') or die(mysqli_error());

    /*if(@$_POST['btn']){
      $query=mysqli_query($conexion, "INSERT INTO usuario(nombre,apellidos,tipo_docu,num_docu,id_rol,correo,password) VALUES('$_POST[nombre]','$_POST[apellidos]','$_POST[tipo_docu]','$_POST[num_docu]','$_POST[roles]','$_POST[correo]','$_POST[password]')");
    }*/
    
    if(@$_POST['btn']){
      $nombre = $_POST["nombre"];
      $apellido = $_POST["apellidos"];
      $tipo_docu = $_POST["tipo_docu"];
      $num_docu = $_POST["num_docu"];
      $rol = $_POST["roles"];
      $correo = $_POST["correo"];
      $pass = $_POST["pass"];

      $insert = "INSERT INTO usuario (nombre,apellido,tipo_docu,num_docu,id_rol,correo,password) VALUES('$nombre','$apellido','$tipo_docu','$num_docu','$rol','$correo','$pass')";
      mysqli_query($conexion,$insert);
    }   
?>