## Documentasi

'Home'
 <img src="public/photos/gambar 1.png">

'Login
 <img src="public/photos/gambar 11.png">

'About Us'
 <img src="public/photos/gambar 2.png">
 
'Dashboard'
 <img src="public/photos/gambar 7.png">

'Beranda-FAQ'
 <img src="public/photos/gambar 9.png">

'User'
 <img src="public/photos/gambar 13.png">

 


## Langkah-Langkah

1. Buat folder baru atau lokasi untuk menjalankan gitbash dengan perintah:
- git clone https://github.com/Wahyu-AN/E-Commerce_LuxAroma.git
- cd E-Commerce_LuxAroma
- code .

2. Ubah .env.example menjadi .env
   
4. Kemudian import file sql yang ada di /E-Commerce_LuxArome/database /Database_LuxAroma.sql

5. Di terminal jalankan:
-	composer install
-	php artisan key:generate
-	npm install
-	npm run watch

6. kemudian pada bagian storage ganti/hapus folder app nya dengan folder yang diekstrak dari app.zip

7. Masuk ke C:\xampp\apache\conf\httpd.conf

8. klik dan tambahkan kode berikut (sesuaikan dengan lokasi git clone anda):
Alias /storage "D:/A_Laravel10/E-Commerce_LuxAroma/storage/app/public"
<Directory "D:/A_Laravel10/E-Commerce_LuxAroma/storage/app/public">
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>

9. Pada XAMPP (yang di run administrator), pada kolom actions di baris MYSQL dan Apache
Klik “Stop”, kemudian klik “Start” kembali

10. Lalu jalankan php artisan serve di visual studio.

11. Untuk login ke dashboard admin menggunakan:
- Email: tootes202@gmail.com
- Password: wahyu1704
