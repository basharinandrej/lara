
<form method="post" action="{{ route('messages.store') }}">
  @csrf
  <label for="name">
    title:
    <input type="text" name="title" value="{{ old('title') }}" />
    @error('title')
      <span>{{ $message }}</span>
    @endif
  </label><br/>
  <label for="content">
    content:
    <input type="text" name="content" value="{{ old('content') }}" />
    @error('content')
      <span>{{ $message }}</span>
    @endif
  </label>
  <hr>
  <button type="send">send</button>
</form>
