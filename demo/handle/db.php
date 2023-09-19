<?php
// Thông tin kết nối đến cơ sở dữ liệu MySQL
$hostname = 'localhost';     // Địa chỉ máy chủ MySQL (thường là localhost)
$username = 'root'; // Tên người dùng MySQL
$password = ''; // Mật khẩu người dùng MySQL
$database = 'demo'; // Tên cơ sở dữ liệu MySQL

// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect($hostname, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
    die('Kết nối đến cơ sở dữ liệu thất bại: ' . mysqli_connect_error());
}

// Kết nối thành công, thực hiện các thao tác với cơ sở dữ liệu ở đây

// Đóng kết nối
mysqli_close($conn);
?>