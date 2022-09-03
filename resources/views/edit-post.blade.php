<!DOCTYPE html>
<html>
<body>
@if(Session::has('post_update'))
  <span>{{ Session::get('post_update') }}</span>  
@endif
<form method="post" action="{{ route('update.post') }}">
    @csrf
    <input name="id" type="hidden" value="{{ $post->id }}">
Post:<input name="name" type="text" value="{{ $post->name }}"></br>
Description : <input name="description" type="textarea" value="{{ $post->description }}"><br>
<input type="submit" name="submit" >
</form>

</body>
</html>