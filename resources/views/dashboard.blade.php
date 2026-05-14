<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>ĐĂNG NHẬP THÀNH CÔNG</h1>

<p>
    Xin chào:
    {{ session('name') }}
</p>

<p>
    Tên người dùng:
    {{ session('username') }}
</p>

<a href="{{ url('/logout') }}">
    Đăng xuất
</a>

</body>
</html>