
<h2>Создать Event</h2>
<hr>
<a href="{{ route('home') }}">Главная</a>
<br>
<a href="{{ route('events.index') }}">Все эвенты</a>

<br>
<br>

<form action="{{ route('events.store') }}" method="post">
  @csrf
  <label for="name">
    <span>Название event'a</span>
    <input type="text" name="name" value="{{ old('name') }}" id="name">
    @error('name')<span>{{ $message }}</span>@enderror
  </label>
  <br>

  <label for="description">
    <span>Описание event'a</span>
    <input type="text" name="description" value="{{ old('description') }}" id="description">
    @error('description')<span>{{ $message }}</span>@enderror
  </label>
  <br>

  <label for="duration">
    <span>Продолжительность event'a</span>
    <input type="text" name="duration" value="{{ old('duration') }}" id="duration">
    @error('duration')<span>{{ $message }}</span>@enderror
  </label>
  <br>

  <label for="start_date">
    <span>Дата начала event'a</span>
    <input type="text" name="start_date" value="{{ old('start_date') }}" id="start_date">
    @error('start_date')<span>{{ $message }}</span>@enderror
  </label>
  <br>

  <button type="submit">Отправить</button>
</form>