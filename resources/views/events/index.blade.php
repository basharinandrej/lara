<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Эвенты</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
	<div class="container">
		@if (session('event'))
			<div class="alert alert-success">{{ session('event') }}</div>
		@endif

		<a
			class="btn btn-link"
			href="{{ route('events.create') }}">
			Создать событие
		</a>

		<ul class="list-group">
		@foreach ($events as $event)
			<li class="list-group-item">
				<a href="{{ route('events.show', $event->id) }}">{{ $event->name }}</a>
			</li>
		@endforeach
		</ul>
	</div>
</body>
</html>
