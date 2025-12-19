<meta charset="UTF-8">
<?php
echo "<h1>PM1-CUỐIKY-DINHVANHUONG</h1>";

$host = 'db';
$user = 'root';
$pass = '';
$dbname = 'quanly_sv'; // Tên database bạn đã đặt trong docker-compose.yml

try {
    // 1. Kết nối vào MySQL và chọn database cụ thể
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<h3>Kết nối Database (PDO): OK</h3>"; 

    // 2. Thực hiện truy vấn lấy danh sách sinh viên
    $sql = "SELECT * FROM sinhvien";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // 3. Hiển thị dữ liệu ra bảng HTML (Frontend)
    echo "<table border='1' cellpadding='10' style='border-collapse: collapse; width: 50%;'>";
    echo "<tr style='background-color: #f2f2f2;'>
            <th>ID</th>
            <th>MSSV</th>
            <th>Họ Tên</th>
          </tr>";
    
    // Lặp qua từng dòng dữ liệu từ database
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['mssv'] . "</td>";
        echo "<td>" . $row['hoten'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

} catch(PDOException $e) {
    echo "<h3>Lỗi kết nối hoặc truy vấn: " . $e->getMessage() . "</h3>";
}
?>