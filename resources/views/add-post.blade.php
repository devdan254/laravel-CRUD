<!DOCTYPE html>
<html>
<body>
@if(Session::has('post_add'))
  <span>{{ Session::get('post_add') }}</span>  
@endif
<form method="post" action="{{ route('save.post') }}">
    @csrf
Post:<input name="name" type="text"></br>
Description : <input name="description" type="textarea"><br>
<input type="submit" name="submit" >
</form>

</body>
</html>