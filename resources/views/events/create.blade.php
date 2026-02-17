
<h2>Создать Event</h2>
<hr>
<a href="{{ route('home') }}">Главная</a>
<br>
<a href="{{ route('events.index') }}">Все эвенты</a>

<br>
<br>

<form action="{{ route('events.store') }}" method="post">
  @csrf
  <label for="title">
    <span>Название event'a</span>
    <input type="text" name="title">
  </label>
  <br>

  <label for="description">
    <span>Описане event'a</span>
    <input type="text" name="description">
  </label>
  <br>

  <label for="duration">
    <span>Продолжительность event'a</span>
    <input type="text" name="duration">
  </label>
  <br>

  <label for="start-date">
    <span>Дата начала event'a</span>
    <input type="text" name="start-date">
  </label>
  <br>

  <button type="send">Отправить</button>
</form>