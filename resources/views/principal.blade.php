<!DOCTYPE html>

<html>

<head>

	<meta charset = "utf-8">
	<title>@yield("titulo")</title>

	<link href = "https://laravel.pro/public/css/bootstrap.css" rel = "stylesheet">
	<link href = "https://laravel.pro/public/css/estilos.css" rel = "stylesheet">
	<link href = "https://laravel.pro/public/css/font-awesome.css" rel = "stylesheet">

	<script src = "https://laravel.pro/public/js/jquery.js"></script>
	<script src = "https://laravel.pro/public/js/bootstrap.js"></script>

</head>

<body>
	
	<div class = "container-fluid">

		<div class = "container">

			@yield("contenido")

		</div>

	</div>
	
</body>

</html>