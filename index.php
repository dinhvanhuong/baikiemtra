<?php 
  // Dùng 'db' thay vì 'localhost' vì đang chạy trong Docker
  $co = mysql_connect('db', 'root', ''); 
  if (!$co) echo "Lỗi";
  else echo "OK";
?>