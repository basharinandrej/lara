<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Сообщение</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div>
	<a href="{{ route('messages.index') }}">Сообщения</a>
	<a href="{{ route('home') }}">Главная</a>
	{{ $message->content }}.
</div>
</body>
</html>
