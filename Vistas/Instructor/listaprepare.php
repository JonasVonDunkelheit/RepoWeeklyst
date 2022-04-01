<?php
  require '../../bd/conexion.php';
  
  /*    $registro = $_POST["asistencia"];
      $nombre = $_POST["nombre"];

        
        $insert = "INSERT INTO lista(aprendiz,id_registro) VALUES('$nombre','$registro')";
        $result = mysqli_query($conexion,$insert);        
        // mysql_query($insertsql);         
                
      if($result){
        echo "<script languaje='javascript'>
        alert('Los datos fueron actualizados correctamente');
        location.assign('registro.php');</script>";
      }
    } */

    $nombre=$_POST['nombre'];
    $registro=$_POST['asistencia'];
    $fecha=date('Y-m-d');

    $insert = "INSERT INTO lista(aprendiz,registro,fecha) VALUES";

    for($i=0;$i<count($nombre);$i++){
      $insert.="('".$nombre[$i]."', '".$registro[$i]."', '".$fecha."'),";
    }
    
    $insert_final=substr($insert,0,-1);
    
    

    $conect = mysqli_query($conexion,$insert_final);    
    

 
      if($conect){
        echo "<script languaje='javascript'>
        alert('Los datos fueron actualizados correctamente');
        location.assign('registro.php');</script>";
      }

    mysqli_close($conexion);
?>

