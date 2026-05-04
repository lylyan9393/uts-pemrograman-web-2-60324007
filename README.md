# uts-pemrograman-web-2-60324007

Nama: Lintang Tsaniatu Azzahro
NIM: 60324007

Deskripsi singkat aplikasi:
Aplikasi ini merupakan sistem manajemen kategori buku berbasis web yang dibuat menggunakan PHP dan MySQL.
Fitur utama aplikasi ini adalah CRUD (Create, Read, Update, Delete) untuk mengelola data kategori buku di perpustakaan.

Fitur yang tersedia:
Menampilkan daftar kategori buku
Menambahkan kategori baru
Mengedit data kategori
Menghapus kategori

cara instalasi dan menjalankan aplikasi:
1. Clone / Download Repository
git clone https://github.com/lylyan9393/uts-pemrograman-web-2-60324007.git
2. Pindahkan ke Folder htdocs
Letakkan folder project ke dalam:
C:\xampp\htdocs\
Contoh:
C:\xampp\htdocs\uts_perpustakaan_60324007
3. Jalankan XAMPP
Start Apache
Start MySQL
4. Import Database
Buka phpMyAdmin
Buat database:
uts_perpustakaan_60324007
Import file:
uts_perpustakaan_60324007.sql
5. Konfigurasi Database
Buka file:
config/database.php
Sesuaikan jika perlu:
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'uts_perpustakaan_60324007');
6. Jalankan Aplikasi
Buka browser:
http://localhost/UTS_PERPUSTAKAAN_60324007

struktur folder:
UTS_PERPUSTAKAAN_60324007/
-config/
---database.php
-database/
---uts_perpustakaan_60324007.sql
-create.php
-delete.php
-edit.php
-index.php
-README.md
-test_connestion.php

Link repository Git Hub:
https://github.com/lylyan9393/uts-pemrograman-web-2-60324007.git