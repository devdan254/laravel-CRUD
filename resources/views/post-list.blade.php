<!DOCTYPE html>
<html>
<body>
    <a href="{{route('post.add')}}">ADD</a>
    @if(Session::has('post_deleted'))
  <span>{{ Session::get('post_deleted') }}</span>  
@endif
<table>
<tr>
    <th>ID</th>
    <th>NAME</th>
    <th>DESCRIPTION</th>
    <th>ACTION</th>
</tr>
@foreach ($posts as $post)
    

<tr>
    <td>{{ $post->id }}</td>
    <td>{{ $post->name }}</td>
    <td>{{ $post->description }}</td>
    <td>
        <a href="/edit/{{ $post->id }}">Edit</a> |
        <a href="/delete/{{ $post->id }}">Delete</a> 
    </td>
</tr>
@endforeach
</table>

</body>
</html>