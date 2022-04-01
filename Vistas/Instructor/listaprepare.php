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

    $insert = "INSERT INTO lista(aprendiz,registro) VALUES";

    for($i=0;$i<count($nombre);$i++){
      $insert.="('".$nombre[$i]."', '".$registro[$i]."'),";
    }
    var_dump($insert);
    $insert_final=substr($insert,0,-1);
    
    var_dump($insert_final);

    $conect = mysqli_query($conexion,$insert_final);    
    var_dump($conect);

 
      if($conect){
        echo "<script languaje='javascript'>
        alert('Los datos fueron actualizados correctamente');
        location.assign('registro.php');</script>";
      }

    mysqli_close($conexion);
?>

