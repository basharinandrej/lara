<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Сообщения</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<h1>Blog</h1>
<a href="{{ route('messages.create') }}">Создать сообщение</a>
<br>
<a href="{{ route('home') }}">Главная</a>
<ul class="list-group">
@foreach ($messages as $message)
	<li class="list-group-item">
		<span>{{ $message->title }}</span>
		<a href="{{ route('messages.show', $message->id) }}">Подробнее</a>
	</li>
@endforeach
</ul>

@if (session('message'))
	<div class="alert alert-success">
		{{ session('message') }}
	</div>
@endif
</body>
</html>
