
# Company Profile Web App - CodeIgniter 4

Aplikasi web Company Profile berbasis CodeIgniter 4, dirancang untuk menampilkan informasi perusahaan, layanan, portofolio, berita, staff, dan fitur manajemen user secara lengkap dan mudah digunakan.

## Fitur Utama

- **Landing Page Dinamis**: Menampilkan informasi perusahaan, layanan, portofolio, dan berita terbaru.
- **Manajemen Berita**: CRUD berita dengan kategori.
- **Manajemen Layanan**: CRUD layanan yang ditawarkan perusahaan.
- **Manajemen Portofolio**: CRUD portofolio proyek/klien.
- **Manajemen Klien**: CRUD data klien.
- **Manajemen Staff**: CRUD data staff/karyawan.
- **Manajemen User**: Registrasi, login, profile, ganti password, dan hak akses.
- **Halaman Dashboard**: Statistik dan ringkasan data penting.
- **Autentikasi & Otorisasi**: Sistem login, logout, dan filter akses halaman.
- **Pengaturan Website**: Update profil perusahaan, kontak, dan sosial media.
- **404 Custom Page**: Halaman error khusus jika halaman tidak ditemukan.

## Struktur Folder Penting

- `app/Controllers/` : Controller utama (Home, Auth, Dashboard, Berita, Client, Portofolio, Staff, User, dll)
- `app/Models/` : Model untuk akses database (M_berita, M_client, M_portofolio, dll)
- `app/Views/` : Template tampilan frontend & backend
- `public/assets/` : Asset gambar, css, js
- `app/Helpers/` : Helper custom untuk berbagai kebutuhan
- `app/Config/Routes.php` : Konfigurasi routing aplikasi

## Instalasi

1. **Clone repository ini**
2. Jalankan `composer install`
3. Copy file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database, baseURL, dsb.
4. Jalankan migrasi database jika ada
5. Pastikan folder `writable/` dapat ditulis (permission 775/777)
6. Akses aplikasi melalui browser ke alamat yang sesuai (misal: http://localhost/compro-ci4/public)

## Kebutuhan Server

- PHP 8.1+
- Ekstensi PHP: intl, mbstring, json, curl, mysqlnd (jika pakai MySQL)
- Composer

## Kontribusi

Pull request dan issue sangat terbuka untuk pengembangan lebih lanjut.


Silakan edit bagian deskripsi, fitur, atau instruksi sesuai kebutuhan spesifik project Anda sebelum mengupload ke GitLab.
## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
