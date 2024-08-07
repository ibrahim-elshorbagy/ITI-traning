<!DOCTYPE html>
<html>

<head>
    <title>Show Post</title>
</head>

<body>
    <h1>{{ $post['title'] }}</h1>
    <p>{{ $post['content'] }}</p>
    <a href="/posts/{{ $post['id'] }}/edit">Edit Post</a>
    <form action="/posts/{{ $post['id'] }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" >Delete</button>
    </form>

</body>

</html>
