FROM php:5.6-apache
# Lệnh này để cài thư viện mysql cũ mà thầy yêu cầu trên bảng
RUN docker-php-ext-install mysql