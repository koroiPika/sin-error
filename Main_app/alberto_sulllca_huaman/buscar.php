<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "nodejs_login1";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";
	$suma = 0;
    $query = "SELECT * FROM alberto_sulllca_huaman WHERE Name NOT LIKE '' ORDER By Id_no LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM alberto_sulllca_huaman WHERE Id_no LIKE '%$q%' OR fecha LIKE '%$q%' OR Name LIKE '%$q%' OR mes LIKE '%$q%' OR destino LIKE '%$q%' OR dias  LIKE '$q' ";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td>FECHA</td>
    					<td>UNIDAD</td>
    					<td>MES</td>
    					<td>DESTINO</td>
    					<td>DIAS</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['fecha']."</td>
    					<td>".$fila['Name']."</td>
    					<td>".$fila['mes']."</td>
    					<td>".$fila['destino']."</td>
    					<td>".$fila['dias']."</td>
					</tr>";
					$suma+=$fila['dias'];

		}
		$salida.="<tr>
		<td>Total de dias</td>
		<td >".$suma."</td>
		</tr>";
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $conn->close();



?>