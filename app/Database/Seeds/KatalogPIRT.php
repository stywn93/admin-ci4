<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KatalogPIRT extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nama_produk' => 'Keripik Pisang Coklat',
                'nama_pemilik' => 'Bu Ani',
                'nomor_pirt' => '2153271011234-22',
                'kategori' => 'Keripik',
                'tanggal_terbit' => '2022-03-12',
                'tanggal_kedaluwarsa' => '2027-03-12',
                'alamat_usaha' => 'Jl. Melati No. 10',
                'kecamatan' => 'Panji',
                'foto_produk' => 'default.jpg',
                'created_at' => '2025-07-03 07:02:13',
                'updated_at' => '2025-07-03 07:02:13',
            ],
            [
                'id' => 2,
                'nama_produk' => 'Sambal Bawang Pakde',
                'nama_pemilik' => 'Pak Darto',
                'nomor_pirt' => '2153271012235-21',
                'kategori' => 'Sambal',
                'tanggal_terbit' => '2021-11-20',
                'tanggal_kedaluwarsa' => '2026-11-20',
                'alamat_usaha' => 'Dusun Krajan RT 2 RW 1',
                'kecamatan' => 'Mangaran',
                'foto_produk' => 'default.jpg',
                'created_at' => '2025-07-03 07:02:13',
                'updated_at' => '2025-07-03 07:02:13',
            ],
            [
                'id' => 3,
                'nama_produk' => 'Kue Kering Nastar Mini',
                'nama_pemilik' => 'Ibu Rina',
                'nomor_pirt' => '2153271013344-23',
                'kategori' => 'Kue Kering',
                'tanggal_terbit' => '2023-06-01',
                'tanggal_kedaluwarsa' => '2028-06-01',
                'alamat_usaha' => 'Perum Gading Elok Blok B3',
                'kecamatan' => 'Asembagus',
                'foto_produk' => 'default.jpg',
                'created_at' => '2025-07-03 07:02:13',
                'updated_at' => '2025-07-03 07:02:13',
            ],
        ];
        $this->db->table('tb_katalog_pirt')->insertBatch($data);
    }
}
