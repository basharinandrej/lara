<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Событие</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
	<div class="container">
		<h1>Редактировать событие</h1>
		<div class="container">
			<form action="{{ route('events.update', $event->id) }}" method="post">
				@csrf
				@method('PUT')
				<div class="mb-3">
					<label for="name" class="form-label">Название события</label>
					<input
						type="text"
						id="name"
						name="name"
						class="form-control"
						value="{{ old('name', $event->name) }}" 
					>
					@error('name')<span>{{ $message }}</span>@enderror
				</div>

				<div class="mb-3">
					<label for="description" class="form-label">Описание события</label>
					<input
						type="text"
						id="description"
						name="description"
						class="form-control"
						value="{{ old('description', $event->description) }}" 
					>
					@error('description')<span>{{ $message }}</span>@enderror
				</div>

				<div class="mb-3">
					<label for="duration" class="form-label">Продолжительность события</label>
					<input
						type="text"
						id="duration"
						name="duration"
						class="form-control"
						value="{{ old('duration', $event->duration) }}" 
					>
					@error('duration')<span>{{ $message }}</span>@enderror
				</div>

				<div class="mb-3">
					<label for="start_date" class="form-label">Дата начала события</label>
					<input
						type="text"
						id="start_date"
						name="start_date"
						class="form-control"
						value="{{ old('start_date',  $event->start_date) }}" 
					>
					@error('start_date')<span>{{ $message }}</span>@enderror
				</div>

				<button type="submit" class="btn btn-primary">Отправить</button>
			</form>
		</div>
	</div>
</body>