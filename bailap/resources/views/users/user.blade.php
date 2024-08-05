<!DOCTYPE html>
<html>
<head>
    <title>Chi Tiết Người Dùng</title>
</head>
<body>
    <h1>Chi Tiết Người Dùng</h1>
    <p><strong>ID:</strong> {{ $user->id }}</p>
    <p><strong>Tên:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Địa Chỉ:</strong> {{ $user->userDetail->address }}</p>
    <p><strong>Số Điện Thoại:</strong> {{ $user->userDetail->phone_number }}</p>
</body>
</html>
