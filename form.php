<?php 

error_reporting(0);

//Valores del formulario
$nombre=$_POST['nombre']??'No introdujo nombre';
$telefono=$_POST['telefono']??'No introdujo telefono';
$correo=$_POST['correo']??'No introdujo correo';
$mensaje=$_POST['mensaje']??'No introdujo mensaje';

//Datos para el mail
$cabeceras="MIME-Version: 1.0\r\n";
$cabeceras.="Content-type:text/html; charset=UTF-8\r\n";
$cabeceras.="From: Sistemas Millop <sistemasti@millop.com>\r\n";
$cabeceras.="Reply-To: sistemasti@millop.com\r\n";


$to="sistemasti@millop.com";
$subject="Formulario de contacto millop";
$message="
	<table>
		<tr>
			<td>Nombre</td>
			<td>".$nombre."</td>
		</tr>
		<tr>
			<td>Telefono</td>
			<td>".$telefono."</td>
		</tr>
		<tr>
			<td>Correo</td>
			<td>".$correo."</td>
		</tr>
		<tr>
			<td>Mensaje</td>
			<td>".$mensaje."</td>
		</tr>
	</table>";
$r=mail($to, $subject, $message, $cabeceras);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Millop | Mensaje enviado</title>
</head>
<body class="bg-light">
	<main class="container">
		<section class="row">
			<article class="col-12 text-center">
				<img src="img/Logo_completo.webp" class="img-fluid mt-5">
				<p class="h1 mb-5">Tu mensaje se envió correctamente.</p>
				<a href="javascript: history.go(-1)" class="btn btn-lg text-white bg-orange">Regresar</a>
			</article>
		</section>
	</main>
</body>
</html>
