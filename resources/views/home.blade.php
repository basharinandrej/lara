<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Document</title>
		@vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>
	<body>
		<div class="container">
			<h1>Список разделов</h1>
			<ol class="list-group">
				<li class="list-group-item">
					<a href="{{ route('messages.index') }}">Сообщения</a>
				</li>
				<li class="list-group-item">
					<a href="{{ route('events.index') }}">Эвенты</a>
				</li>
			</ol>
		</div>
	</body>
</html>
