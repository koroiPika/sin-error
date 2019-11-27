<?php
session_start();
if(isset($_SESSION['usuario'])){
	if ($_SESSION['usuario']['Tipo_usuario']!="alejandro_huaman") {
		header('Location:../adrian_parodi/');
		header('Location:../alberto_cardenas/');
		header('Location:../alberto_sulllca_huaman/');
	
    }
	} else{
		header('Location:../../');
	}
	
 ?>
 <!DOCTYPE html>
<html>

<head>
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
	<title>CONDUCTORES PIKANGO</title>

</head>

<body>

   


<section class="principal">
<!-- <form action='cerrar_sesion.php'>
    <input type="submit" name="sesionDestroy" value="Cerrar sesion"/>
</form> -->
<a href="../salir.php">Cerrar Sesión</a>

<h1>Bienvenido <?php echo $_SESSION['usuario'] ['Nombre']?> ESCRIBA EL MES QUE DESEAS CONSULTAR </h1>
	

	<div class="formulario">
		<label for="caja_busqueda">Buscar</label>
		<input type="text" name="caja_busqueda" id="caja_busqueda"></input>

		
	</div>

	<div id="datos"></div>
	
	
</section>



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>
