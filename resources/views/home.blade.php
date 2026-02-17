<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Document</title>
	</head>
	<body>
		Hello world

		<ol>
			<li>
				<a href="{{ route('messages.index') }}">Сообщения</a>
			</li>
			<li>
				<a href="{{ route('events.index') }}">Эвенты</a>
			</li>
		</ol>
	</body>
</html>
