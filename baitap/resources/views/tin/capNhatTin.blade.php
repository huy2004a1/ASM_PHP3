<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập Nhật Tin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <form action="{{ route('tin.capnhat_', $tin->id) }}" method="post" class="col-7 m-auto">
            @csrf
            <div class="mb-3">
                <label for="tieude" class="form-label">Tiêu đề:</label>
                <input type="text" name="tieuDe" id="tieuDe" class="form-control" value="{{ $tin->tieuDe }}" required>
            </div>
            <div class="mb-3">
                <label for="tomtat" class="form-label">Tóm tắt:</label>
                <textarea name="tomTat" id="tomTat" class="form-control" rows="3" required>{{ $tin->tomTat }}</textarea>
            </div>
            <div class="mb-3">
                <label for="noidung" class="form-label">Nội dung:</label>
                <input type="text" name="noiDung" id="noiDung" class="form-control" value="{{ $tin->noiDung }}" required>
            </div>
            <div class="mb-3">
                <label for="idLT" class="form-label">Loại tin:</label>
                <select name="idLT" id="idLT" class="form-control" required>
                    <option value="13" {{ $tin->idLT == 13 ? 'selected' : '' }}>Thể thao</option>
                    <option value="14" {{ $tin->idLT == 14 ? 'selected' : '' }}>Công nghệ</option>
                    <option value="15" {{ $tin->idLT == 15 ? 'selected' : '' }}>Thời sự</option>
                </select>
            </div>
            <button type="submit" class="btn btn-warning">Cập nhật tin</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

