<meta charset="UTF-8">
<?php
echo "<h1>Bài Kiểm tra - MSSV: DH52200753</h1>";

$host = 'db';
$user = 'root';
$pass = '';

try {
    // Kết nối vào MySQL server thôi, không cần chọn database test_db
    $conn = new PDO("mysql:host=$host", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<h3>Kết nối Database (PDO): OK</h3>"; 
} catch(PDOException $e) {
    echo "<h3>Lỗi kết nối: " . $e->getMessage() . "</h3>";
}
?>