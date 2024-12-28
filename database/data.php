<?php
// Thông tin kết nối
$servername = 'localhost';  // Đặt tên máy chủ (server)
$username = 'root';         // Tên người dùng MySQL
$password = '';             // Mật khẩu (nếu có)
$database = 'btl';          // Tên cơ sở dữ liệu

// Kết nối đến MySQL
$conn = mysqli_connect($servername, $username, $password, $database);


?>