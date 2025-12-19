<meta charset="UTF-8">
<?php
echo "<h1>1M1-CUỐIKY-DINHVANHUONG</h1>"; // Bạn có thể thêm MSSV vào đây nếu cần

$host = 'db';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h3>Kết nối Database (PDO): OK</h3>"; 
} catch(PDOException $e) {
    echo "<h3>Lỗi kết nối: " . $e->getMessage() . "</h3>";
}
?>