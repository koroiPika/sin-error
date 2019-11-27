<?php
sleep(2);
session_start();
require 'conexion.php';




$usuarios=$mysqli->query("SELECT Nombre, Tipo_usuario
FROM usuarios
WHERE Usuario='".$_POST['usuariolg']."'
AND password='".$_POST['passlg']."'");
  
if ($usuarios->num_rows == 1):
  $datos= $usuarios->fetch_assoc();
  $_SESSION['usuario']=$datos;
//   $_SESSION['usuario'] = $datos;
//   $_SESSION['mate'] = $datos['matematicas'];
    echo json_encode(array('error'=>false,'tipo'=>$datos['Tipo_usuario']));
else:    
    echo json_encode(array('error'=>true));
endif;



$mysqli->close();

 ?>