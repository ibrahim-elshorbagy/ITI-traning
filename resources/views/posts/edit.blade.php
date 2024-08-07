<!DOCTYPE html>
<html>

<head>
    <title>Edit Post</title>
</head>

<body>
    <h1>Edit Post</h1>
    <form action="/posts/{{ $post['id'] }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $post['title'] }}" >
        <br>
        <label for="content">Content:</label>
        <textarea id="content" name="content" >{{ $post['content'] }}</textarea>
        <br>
        <button type="submit">Update Post</button>
    </form>
    <a href="/posts">Back to Posts</a>
</body>

</html>
