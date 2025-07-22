<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->match(['get', 'post'], '/', 'Auth::index');
$routes->group('', ['filter' => 'auth'], static function ($routes) {
  $routes->get('/dashboard', 'Dashboard::index');
  $routes->get('user/profile', 'User::profile');
  $routes->post('user/edit', 'User::edit');
  $routes->get('user/daftar_user', 'User::daftar_user');
  $routes->post('user/tambah', 'User::addUser');
  $routes->post('user/edit/(:num)', 'User::editUser/$1');
  $routes->match(['get', 'post'], 'user/changepassword', 'User::changepassword');
  $routes->get('user/hapus/(:num)', 'User::hapus/$1');
  $routes->get('staff', 'Staff::index');
  $routes->post('staff/hapus/(:num)', 'Staff::hapus/$1');
  $routes->match(['get', 'post'], 'staff/tambah', 'Staff::tambahStaff');
  $routes->match(['get', 'post'], 'staff/edit/(:num)', 'Staff::edit/$1');
  $routes->get('client', 'Client::index');
  $routes->post('client/hapus/(:num)', 'Client::hapus/$1');
  $routes->match(['get', 'post'], 'client/tambah', 'Client::tambahClient');
  $routes->get('portfolio', 'Portofolio::index');
  $routes->match(['get', 'post'], 'portfolio/tambah', 'Portofolio::tambah');
  $routes->match(['get', 'post'], 'portfolio/edit/(:num)', 'Portofolio::edit/$1');
  $routes->get('portfolio/hapus/(:num)', 'Portofolio::hapus/$1');
  $routes->get('berita', 'Berita::index');
  $routes->match(['get', 'post'], 'berita/tambah', 'Berita::tambah');
  $routes->match(['get', 'post'], 'berita/edit/(:num)', 'Berita::edit/$1');
  $routes->post('berita/hapus/(:num)', 'Berita::hapus/$1');
  $routes->get('layanan', 'Layanan::index');
  $routes->match(['get', 'post'], 'layanan/tambah', 'Layanan::tambah');
  $routes->match(['get', 'post'], 'layanan/edit/(:num)', 'Layanan::edit/$1');
  $routes->post('layanan/hapus/(:num)', 'Layanan::hapus/$1');
  $routes->get('kategori/kategoriberita', 'Kategori::kategoriBerita');
  $routes->match(['get', 'post'], 'kategori/tambahkategoriberita', 'Kategori::tambahKategoriBerita');
  $routes->match(['get', 'post'], 'kategori/editkategoriberita/(:num)', 'Kategori::editKategoriBerita/$1');
  $routes->post('kategori/hapuskategoriberita/(:num)', 'Kategori::hapusKategoriBerita/$1');
  $routes->get('kategori/kategoristaff', 'Kategori::kategoriStaff');
  $routes->match(['get', 'post'], 'kategori/tambahkategoristaff', 'Kategori::tambahKategoriStaff');
  $routes->match(['get', 'post'], 'kategori/editkategoristaff/(:num)', 'Kategori::editKategoriStaff/$1');
  $routes->post('kategori/hapuskategoristaff/(:num)', 'Kategori::hapusKategoriStaff/$1');
  $routes->get('kategori/kategoriclient', 'Kategori::kategoriClient');
  $routes->match(['get', 'post'], 'kategori/tambahkategoriclient', 'Kategori::tambahKategoriClient');
  $routes->match(['get', 'post'], 'kategori/editkategoriclient/(:num)', 'Kategori::editKategoriClient/$1');
  $routes->post('kategori/hapuskategoriclient/(:num)', 'Kategori::hapusKategoriClient/$1');
  $routes->match(['get', 'post'], 'client/tambah', 'Client::tambahclient');
  $routes->match(['get', 'post'], 'client/edit/(:num)', 'Client::edit/$1');
  $routes->match(['get', 'post'], 'kategori/edit-kategori-client/(:num)', 'Kategori::editKategoriClient/$1');
  $routes->get('kategori/hapus-kategori-client/(:num)', 'Kategori::hapusKategoriClient/$1');
  $routes->get('settings', 'Settings::index');
  $routes->post('settings/update', 'Settings::update');
  $routes->get('auth/logout', 'Auth::logout');
});

$routes->get('blocked', 'Blocked::index');
// $routes->set404Override('My404::index');
