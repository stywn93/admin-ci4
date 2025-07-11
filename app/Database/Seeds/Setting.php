<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Setting extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_setting' => 1,
                'nama_website' => 'Dinkes Situbondos',
                'alamat' => 'Jl. PB Sudirman No. 14, Patokan, Situbondo.',
                'telepon' => '0822-65000-119',
                'email' => 'dinkes@situbondokab.go.id',
                'tentang' => '<div style="text-align: justify; line-height: 3;">Setiap Pangan Olahan tertentu yang diproduksi oleh IRTP (Industri Rumah Tangga Pangan) untuk diperdagangkan dalam kemasan eceran sebelum diedarkan WAJIB memiliki perizinan berusaha berupa SPP-IRT (Sertifikat Pemenuhan Komitmen Produksi Pangan Olahan Industri Rumah Tangga) untuk menunjang kegiatan usaha. Sehingga SPP-IRT merupakan Legalitas yang diberikan kepada IRTP untuk memproduksi dan mengedarkan PIRT. Sedangkan PIRT adalah Pangan Olahan hasil produksi Industri Rumah Tangga Pangan (IRTP) yang diedarkan dalam kemasan dan berlabel.</div>',
                'pengertian_pirt' => '<div>izin edar yang dikeluarkan oleh Dinas Kesehatan Kabupaten/Kota bagi pelaku usaha yang memproduksi pangan olahan dalam skala rumahan. Izin ini menunjukkan bahwa produk tersebut telah memenuhi standar keamanan pangan, serta layak dan aman untuk dikonsumsi masyarakat. Nomor P-IRT biasanya dicantumkan pada label kemasan sebagai tanda bahwa produk telah terdaftar secara resmi. P-IRT diperlukan untuk berbagai jenis produk pangan olahan berisiko rendah, seperti: keripik, kue kering, abon, sambal kemasan, minuman herbal serbuk, dan sejenisnya. Untuk mendapatkan P-IRT, pelaku usaha harus memenuhi beberapa persyaratan, di antaranya:\r\n<ul>\r\n<li>Mengikuti penyuluhan keamanan pangan</li>\r\n<li>Memiliki tempat produksi yang laik hygiene sanitasi</li>\r\n<li>Melengkapi dokumen administrasi</li>\r\n</ul>\r\nManfaat memiliki P-IRT antara lain:\r\n<ul>\r\n<li>Produk mendapatkan legalitas untuk diedarkan secara sah</li>\r\n<li>Meningkatkan kepercayaan konsumen</li>\r\n<li>Mempermudah pemasaran ke toko, pasar, hingga e-commerce</li>\r\n</ul>\r\n</div>',
                'pengertian_slhs' => '<div>Sertifikat Laik Hygiene Sanitasi (SLHS) adalah sertifikat yang diberikan kepada tempat usaha makanan atau minuman yang telah memenuhi standar sanitasi dan kebersihan lingkungan produksi. Sertifikat ini dikeluarkan oleh Dinas Kesehatan setelah dilakukan inspeksi langsung ke lokasi usaha. Tujuan utama SLHS adalah untuk memastikan bahwa tempat produksi atau penyajian makanan tidak mencemari produk pangan, air, alat, maupun lingkungan sekitarnya. Aspek yang dinilai meliputi:\r\n<ul>\r\n<li>Kebersihan tempat produksi</li>\r\n<li>Ketersediaan air bersih</li>\r\n<li>Pembuangan limbah yang baik</li>\r\n<li>Sanitasi peralatan dan bahan baku</li>\r\n<li>Personal hygiene pekerja</li>\r\n</ul>\r\nSLHS umumnya diperlukan oleh:\r\n<ul>\r\n<li>Industri rumah tangga pangan (sebagai syarat pengajuan P-IRT)</li>\r\n<li>Warung makan, depot, kantin, katering, dan jasa boga lainnya</li>\r\n</ul>\r\nDengan SLHS, pelaku usaha membuktikan bahwa tempat usahanya sudah memenuhi persyaratan kesehatan lingkungan, dan menjadi dasar penting untuk menjamin produk yang dihasilkan aman untuk dikonsumsi.</div>',
                'sejarah' => '<p style="text-align: center;"><strong>Sejarah Perusahaan</strong></p>\r\n<div>Lorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Iusto&nbsp;doloribus&nbsp;non&nbsp;repellat&nbsp;magni&nbsp;inventore&nbsp;nulla&nbsp;ducimus&nbsp;sit&nbsp;veritatis&nbsp;incidunt&nbsp;voluptate&nbsp;consectetur&nbsp;suscipit&nbsp;earum,&nbsp;debitis&nbsp;expedita&nbsp;corporis&nbsp;mollitia&nbsp;maiores&nbsp;beatae&nbsp;accusantiumLorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Iusto&nbsp;doloribus&nbsp;non&nbsp;repellat&nbsp;magni&nbsp;inventore&nbsp;nulla&nbsp;ducimus&nbsp;sit&nbsp;veritatis&nbsp;incidunt&nbsp;voluptate&nbsp;consectetur&nbsp;suscipit&nbsp;earum,&nbsp;debitis&nbsp;expedita&nbsp;corporis&nbsp;mollitia&nbsp;maiores&nbsp;beatae&nbsp;accusantium?Lorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Iusto&nbsp;doloribus&nbsp;non&nbsp;repellat&nbsp;magni&nbsp;inventore&nbsp;nulla&nbsp;ducimus&nbsp;sit&nbsp;veritatis&nbsp;incidunt&nbsp;voluptate&nbsp;consectetur&nbsp;suscipit&nbsp;earum,&nbsp;debitis&nbsp;expedita&nbsp;corporis&nbsp;mollitia&nbsp;maiores&nbsp;beatae&nbsp;accusantiumLorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Iusto&nbsp;doloribus&nbsp;non&nbsp;repellat&nbsp;magni&nbsp;inventore&nbsp;nulla&nbsp;ducimus&nbsp;sit&nbsp;veritatis&nbsp;incidunt&nbsp;voluptate&nbsp;consectetur&nbsp;suscipit&nbsp;earum,&nbsp;debitis&nbsp;expedita&nbsp;corporis&nbsp;mollitia&nbsp;maiores&nbsp;beatae&nbsp;accusantium?</div>',
                'logo' => 'client-4.png',
            ],
        ];

        $this->db->table('tb_setting')->insertBatch($data);
    }
}
