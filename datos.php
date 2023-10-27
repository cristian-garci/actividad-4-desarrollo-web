<?php

	$nombre = $_POST['nombreyapellido'];
	$ncelular = $_POST['numerocelular'];
	$correo = $_POST['correo'];
	$datos = $_POST['tabla'];

	
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./style/datos.css">
	<title>datos</title>
</head>

<body>
<h1>datos de tu solicitud</h1>
	<table>
		<thead>
			<tr>
				<th>nombre </th>
				<th>numero celular</th>
				<th>correo</th>
				<th>servicio que solicita</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $nombre; ?></td>
				<td><?php echo $ncelular; ?></td>
				<td><?php echo $correo; ?></td>
				<td><?php echo $datos; ?></td>

			</tr>
		</tbody>
	</table>


</body>
</html>