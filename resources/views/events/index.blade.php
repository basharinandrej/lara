<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Эвенты</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<a href="{{ route('events.create') }}">Создать event</a>

<ul class="list-group">
@foreach ($events as $event)
	<li class="list-group-item">
		<span>{{ $event->name }}</span>
	</li>
@endforeach
</ul>
</body>
</html>
