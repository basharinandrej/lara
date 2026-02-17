
<a href="{{ route('events.create') }}">Создать event</a>

<ul class="events">
@foreach ($events as $event)
    <li class="event">
			<span>{{  $event->name }}</span>
			<!-- <a href="{{ route('messages.show', $event->id) }}">Подробнее</a> -->
		</li>
@endforeach
</ul>