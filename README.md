## Langkah-Langkah

Buat folder baru atau lokasi untuk menjalankan gitbash dengan perintah:
- git clone https://github.com/Wahyu-AN/E-Commerce_LuxAroma.git
- cd E-Commerce_LuxAroma
- code .

Ubah .env.example menjadi .env

Kemudian import file sql yang ada di /E-Commerce_LuxArome/database /Database_LuxAroma.sql

Di terminal jalankan:
-	composer install
-	php artisan key:generate
-	npm install
-	npm run watch

kemudian pada bagian storage ganti/hapus folder app nya dengan folder yang diekstrak dari app.zip

Masuk ke C:\xampp\apache\conf\httpd.conf

klik dan tambahkan kode berikut (sesuaikan dengan lokasi git clone anda):
Alias /storage "D:/A_Laravel10/E-Commerce_LuxAroma/storage/app/public"
<Directory "D:/A_Laravel10/E-Commerce_LuxAroma/storage/app/public">
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>

Pada XAMPP (yang di run administrator), pada kolom actions di baris MYSQL dan Apache

Klik “Stop”, kemudian klik “Start” kembali

Lalu jalankan php artisan serve di visual studio.

Untuk login ke dashboard admin menggunakan:
- Email: tootes202@gmail.com
- Password: wahyu1704
