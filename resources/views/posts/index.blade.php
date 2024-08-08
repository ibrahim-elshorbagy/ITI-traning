<!DOCTYPE html>
<html>

<head>
    <title>Posts</title>
</head>

<body>
    <h1>Posts</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></td>
                <td>{{ $post->body }}</td>
                <td>
                    <a href="/posts/{{ $post->id }}/edit">Edit</a> |
                    <a href="/posts/{{ $post->id }}">view</a> |
                    <form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="/posts/create">Create New Post</a>
</body>

</html>
