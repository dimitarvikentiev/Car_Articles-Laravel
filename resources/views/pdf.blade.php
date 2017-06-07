<!DOCTYPE html>
<html>
<head></head>
<body>
    <h1>{{ $post->title }}</h1>
    <img src="uploads/images/{{ $post->image }}">
    <h3>{{ $post->content }}</h3>
</body>
</html>