Syarat menjalankan aplikasi ini:
Aplikasi XAMPP sudah terinstall
Composer sudah terinstall
Jalankan service mysql dan apache
buka phpmyadmin di browser
buat database baru dengan nama rpl_db

--

Panduan Menjalankan Aplikasi ini:
download zip aplikasi ini/menggunakan perintah git, misal simpan di drive D:
buka terminal/prompt masuk ke path tempat project ini, masuk ke drive D:
ketikkan cd D:\rpl_sik kemudian tekan enter
jalankan perintah ini untuk membuat table yang diperlukan ke dalam database rpl_db :
php artisan migrate

jika tidak ada error, jalankan perintah ini untuk menjalankan aplikasi:
php artisan serve

buka browser, dan akses alamat http://localhost:8000


