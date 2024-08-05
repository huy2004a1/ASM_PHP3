<!DOCTYPE html>
<html>
<head>
    <title>{{ $category->name }}</title>
</head>
<body>
    <h1>{{ $category->name }}</h1>
    <h2>Books</h2>
    <ul>
        @foreach ($category->books as $book)
            <li>{{ $book->title }}</li>
        @endforeach
    </ul>
   
</body>
</html>
