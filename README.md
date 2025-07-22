# Admin Template - CodeIgniter 4

Aplikasi Admin Template berbasis CodeIgniter 4. Project ini dirancang template halaman Admin dengan sampel kasus company profile seperti informasi perusahaan, layanan, portofolio, berita, staff, dan fitur manajemen user secara lengkap dan mudah digunakan.

## Instalasi
- `git clone `
- `composer install`
- Rename file `env` menjadi `.env`, kemudian lakukan penyesuaian konfigurasi Database di file `.env` tersebut
- Jalankan syntax `php spark migrate` untuk melakukan migrasi database
- Jalankan syntax `php spark db:seed AllSeed` untuk melakukan seeding data awal
- Jalankan syntax `php spark serve` untuk menjalankan aplikasi



## Screenshot


#### Login
<div align="center">
    <img src="screenshoot/Company-Profile-›-Login.png"</img> 
</div>

#### Dashboard
<div align="center">
    <img src="screenshoot/Company-Profile-›-Dashboard.png"</img> 
</div>

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

## Kebutuhan Server

- PHP 8.1+
- Ekstensi PHP: intl, mbstring, json, curl, mysqlnd (jika pakai MySQL)
- Composer

## Kontribusi

Pull request dan issue sangat terbuka untuk pengembangan lebih lanjut.