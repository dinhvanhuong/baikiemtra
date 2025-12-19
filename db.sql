-- Nội dung file db.sql dành cho MySQL
CREATE TABLE IF NOT EXISTS sinhvien (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mssv VARCHAR(20) NOT NULL,
    hoten VARCHAR(100) NOT NULL
);

INSERT INTO sinhvien (mssv, hoten) VALUES ('DH52200753', 'Dinh Van Huong');