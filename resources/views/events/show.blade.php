<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Событие</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
	<body>
		<div>
			<div class="container d-flex flex-column">
				<a href="{{ route('home') }}">Главная</a>
				{{ $event->description }}.

				<a 
					href="{{ route('events.edit', $event->id ) }}"
					class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
				>
					Редактировать
				</a>

				<form action="{{ route('events.destroy', $event->id )  }}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Удалить</button>
				</form>
			</div>
		</div>
	</body>
</html>