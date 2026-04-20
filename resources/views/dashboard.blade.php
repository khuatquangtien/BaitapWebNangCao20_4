<h2>Thông tin người dùng</h2>

<p>Họ tên: {{ auth()->user()->name }}</p>
<p>Email: {{ auth()->user()->email }}</p>
<p>Mã sinh viên: {{ auth()->user()->student_id }}</p>

<img src="{{ auth()->user()->avatar }}" width="100">

<br><br>
<a href="/logout">Đăng xuất</a>