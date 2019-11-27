<?php
session_start();
if(isset($_SESSION['usuario'])){
	if ($_SESSION['usuario']['Tipo_usuario']=="adrian_parodi") {
		header('Location:/Main_app/adrian_parodi/');
	} 
	if ($_SESSION['usuario']['Tipo_usuario']=="alberto_cardenas") {
		header('Location:/Main_app/alberto_cardenas/');
	} 
	if ($_SESSION['usuario']['Tipo_usuario']=="alberto_sulllca_huaman") {
		header('Location:/Main_app/alberto_sulllca_huaman/');
	} else if($_SESSION['usuario']['Tipo_usuario']=="alejandro_huaman") {
		header('Location:/Main_app/alejandro_huaman');
	}
	
}
 ?>


<!DOCTYPE html>
<html>

<head>
	<title>Login</title>

	<link rel="stylesheet" type="text/css" href="css/estilo.css"> 

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<style>
@media screen and (max-width: 800px) {
	.card{
                           width:100%;
                           }
}

</style>
</head>

<body>
<div class="principal">

<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			<div class="card">
				<div class="card-header"> 
					
				<h4>PIKANGO</h4>
          </div>
				<div class="card-body">
					<div class="error" class="alert alert-danger" role="alert">
				Datos no válidos
				<!-- Teléfono y/o Contraseña incorrecta.  -->
					
					</div>
					<form action="" id="formlg" data-toggle="validator" role="form" method="post" action="#">
						<input type="hidden" class="hide" id="csrf_token" name="csrf_token" value="C8nPqbqTxzcML7Hw0jLRu41ry5b9a10a0e2bc2">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Teléfono</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
										</div>
										<input type="text" name="usuariolg" placeholder="teléfono" required class="form-control" pattern=".{9,}" title="Ingrese Nueve(9) caracteres" >
									</div>
									<div class="help-block with-errors text-danger"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Contraseña</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-unlock" aria-hidden="true"></i></span>
										</div>
										<input  type="current-password" name="passlg" placeholder="Contraseña" required class="form-control" pattern=".{8,}" title="Ingrese Ocho(8)caracteres" required="">
									</div>
									<div class="help-block with-errors text-danger"></div>
								</div>
							</div>
						</div>
						<!-- <div class="row">
							<div class="checkbox checkbox-primary">
								<input id="checkbox_remember" type="checkbox" name="remember">
								<label for="checkbox_remember"> Recordar</label>
							</div>
						</div> -->
						<div class="row">
							<div class="col-md-12">
								<input type="hidden" name="redirect" value="">
								<!-- <input type="submit" class="botonlg" value="Iniciar Sesión"  class="btn btn-primary btn-lg btn-block" value="Login"  name="submit">
<!-- 						 -->
								<input type="submit" class="btn btn-primary btn-lg btn-block" value="Iniciar Sesión" name="submit" class="botonlg"> 
						
							</div>
						</div>
					</form>
					<!-- <div class="clear"></div>
					<i class="fa fa-user fa-fw"></i> ¿No tienes cuenta aún? <a href="#">Regístrate</a><br>
					<i class="fa fa-undo fa-fw"></i> ¿Se te olvidó tu contraseña? <a href="#">Recupérala</a>
				</div> -->
			</div>
		</div>
	</div>
	<!-- <div class="error">
		<span>Datos no validos</span>



	</div>
	<div class="main">
		<form action="" id="formlg">

			<input type="text" name="usuariolg" placeholder="usuario" required />

		
			<input  type="current-password" name="passlg" placeholder="Contraseña" required />
			<input type="submit" class="botonlg" value="Iniciar Sesión" />

		</form>



	</div> -->
	</div>
	
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>

</html>
