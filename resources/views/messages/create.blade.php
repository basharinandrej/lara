<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Создать сообщение</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<a href="{{ route('messages.index') }}">Сообщения</a>
<br>
<a href="{{ route('home') }}">Главная</a>

	<form method="post" action="{{ route('messages.store') }}">
		@csrf
		<label for="title">
			title:
			<input type="text" name="title" value="{{ old('title') }}" id="title" />
			@error('title')<span>{{ $message }}</span>@enderror
		</label><br/>
		<label for="content">
			content:
			<input type="text" name="content" value="{{ old('content') }}" id="content" />
			@error('content')<span>{{ $message }}</span>@enderror
		</label>
		<hr>
		<button type="submit">send</button>
	</form>
</body>
</html>
