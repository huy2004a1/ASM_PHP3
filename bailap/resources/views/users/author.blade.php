<!DOCTYPE html>
<html>
<head>
    <title>Chi Tiết Tác Giả</title>
</head>
<body>
    <h1>Chi Tiết Tác Giả</h1>
    <p><strong>ID:</strong> {{ $author->id }}</p>
    <p><strong>Tên:</strong> {{ $author->name }}</p>

    <h2>Sách của tác giả</h2>
    <ul>
        @foreach($author->books as $book)
            <li>{{ $book->title }}</li>
        @endforeach
    </ul>
</body>
</html>
