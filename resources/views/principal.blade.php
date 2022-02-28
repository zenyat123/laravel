<!DOCTYPE html>

<html>

<head>

	<meta charset = "utf-8">
	<title>Laravel</title>

	<link href = "{{ asset('css/app.css') }}" rel = "stylesheet">

    <link href = "https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel = "stylesheet">

</head>

<body>

	<div class = "min-h-screen bg-gray-100">

		<div class = "max-w-7xl mx-auto px-4 py-8">

			@yield("content")

		</div>

	</div>

</body>

</html>