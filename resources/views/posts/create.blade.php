<!DOCTYPE html>
<html>

<head>
    <title>Create Post</title>
</head>

<body>
    <h1>Create Post</h1>
    <form action="/posts/store" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>
        <br>
        <button type="submit">Create Post</button>
    </form>
    <a href="/posts">Back to Posts</a>
</body>

</html>