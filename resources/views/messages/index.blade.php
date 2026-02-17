<h1>Blog</h1>
<a href="{{ route('messages.create') }}">Создать сообщение</a>
<br>
<a href="{{ route('home') }}">Главная</a>
<ul class="messages">
@foreach ($messages as $message)
    <li class="message">
			<span>{{  $message->title }}</span>
			<a href="{{ route('messages.show', $message->id) }}">Подробнее</a>
		</li>
@endforeach
</ul>

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif