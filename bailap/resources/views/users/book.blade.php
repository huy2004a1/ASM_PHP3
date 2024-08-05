<!DOCTYPE html>
<html>
<head>
    <title>{{ $book->title }}</title>
</head>
<body>
    <h1>{{ $book->title }}</h1>
    <h2>Categories</h2>
    <ul>
        @foreach ($book->categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>
    
</body>
</html>
