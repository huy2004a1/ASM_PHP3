<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-center flex-grow-1">Danh sách tin</h1>
            <a href="{{ route('tin.them') }}" class="btn btn-success">Thêm Tin</a>
        </div>
        <div class="list-group">
            @foreach ($data as $tin)
            <div class="list-group-item">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="text-primary">{{ $tin->tieuDe }}</h4>
                        <p>{{ $tin->tomTat }}</p>
                    </div>
                    <div class="col-md-4 text-end d-flex justify-content-end align-items-start gap-2">
                        <a href="{{ route('tin.capnhat', $tin->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('tin.xoa', $tin->id) }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76A8f3CmDBJ7c0fQeT3gNYdC27p0jEGxk41FQNxPJtJr71I4AB7qPBiyzIFRJo9"
        crossorigin="anonymous"></script>
</body>

</html>
