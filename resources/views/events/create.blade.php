
<h2>Создать Event</h2>
<hr>
<a href="{{ route('home') }}">Главная</a>
<br>
<a href="{{ route('events.index') }}">Все эвенты</a>

<form action="" method="post">
  <label for="name">
    <span>Название event</span>
    <input type="text" name="name">
  </label>
  <br>

  <label for="name">
    <span>Название event</span>
    <input type="text" name="name">
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

  <button type="submit">Отправить</button>
</form>