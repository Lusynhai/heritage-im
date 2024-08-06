<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WBTBSeeder extends Seeder
{
    public function run()
    {
        DB::table('wbtb')->insert([
            [
                'kategori_wbtb_id' => 3,
                'kategori_budaya' => 'Cagar Budaya',
                'nama' => 'Gedung Pendopo Kabupaten Indramayu',
                'deskripsi' => 'Pendopo Raden Bagus Aria Wiralodra atau yang banyak dikenal sebagai Pendopo Kabupaten Indramayu.',
                'alamat' => 'Jl. Mayjen Sutoyo No.1 Kelurahan Lemah Abang, Kecamatan Indramayu',
                'koordinat' => '-6.325766635058378',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 3,
                'kategori_budaya' => 'Cagar Budaya',
                'nama' => 'Masjid Kuno Bondan',
                'deskripsi' => 'Kabupaten Indramayu memiliki satu masjid yang bersejarah dan berusia tua di Desa Bondan.',
                'alamat' => 'Jl. Sapuangin, Desa Bondan, Kecamatan Sukagumiwang',
                'koordinat' => '-1.6784706780727228,113.78698412818892',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 1,
                'kategori_budaya' => 'Cagar Budaya',
                'nama' => 'Gedung Eks Asisten Resident (Gedung Duwur)',
                'deskripsi' => 'Gedong Duwur yang terletak di Jalan Mayor Dasuki Desa Penganjang.',
                'alamat' => 'Jl. Mayor Dasuki, Desa Penganjang, Kecamatan Sliyeg',
                'koordinat' => '-4.644319902378955,113.78698412818892',
                'sk_gambar' => 'SK Menteri No PM.58/PW.007/MKP/2010.',
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 1,
                'kategori_budaya' => 'Cagar Budaya',
                'nama' => 'Gedung Kodim 0616',
                'deskripsi' => 'Kodim 0616/Indramayu merupakan salah satu Komando Distrik Militer.',
                'alamat' => 'Jl. Gatot Subroto, Kabupaten Indramayu',
                'koordinat' => '-0.36034905276429163,113.69912684400909',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 1,
                'kategori_budaya' => 'Sejarah/Tradisi',
                'nama' => 'Mapag Tamba',
                'deskripsi' => 'Tradisi Mapag Tamba merupakan ritual tahunan masyarakat.',
                'alamat' => 'Desa Malang Semirang, Kecamatan Jatibarang, Kabupaten Indramayu',
                'koordinat' => '0.3427715269481618,114.18234190699808',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 1,
                'kategori_budaya' => 'Sejarah/Tradisi',
                'nama' => 'Tenun Gedogan',
                'deskripsi' => 'Tenun merupakan salah satu tradisi masyarakat Indramayu.',
                'alamat' => 'Kabupaten Indramayu',
                'koordinat' => '-4.425281330056944,113.91877005445863',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 1,
                'kategori_budaya' => 'Sejarah/Tradisi',
                'nama' => 'Batik Dermayon',
                'deskripsi' => 'Batik Dermayon dikenal sebagai batik paon di Indramayu.',
                'alamat' => 'Kabupaten Indramayu',
                'koordinat' => '1.3973225370731432,113.83091277027883',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 1,
                'kategori_budaya' => 'Sejarah/Tradisi',
                'nama' => 'Upacara Ngarot',
                'deskripsi' => 'Tradisi Ngarot dilakukan sebagai ungkapan rasa syukur.',
                'alamat' => 'Desa Lelea, Kabupaten Indramayu',
                'koordinat' => '1.3973225370731432,113.83091277027883',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 1,
                'kategori_budaya' => 'Kesenian',
                'nama' => 'Goong Renteng',
                'deskripsi' => 'Gamelan renteng merupakan salah satu jenis gamelan di Indramayu.',
                'alamat' => 'Kabupaten Indramayu',
                'koordinat' => '-4.688119558055499,114.00662733863844',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 1,
                'kategori_budaya' => 'Kesenian',
                'nama' => 'Sintren',
                'deskripsi' => 'Sintren adalah kesenian tari tradisional.',
                'alamat' => 'Kabupaten Indramayu',
                'koordinat' => '-4.381465734945565,113.69912684400909',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 1,
                'kategori_budaya' => 'Kesenian',
                'nama' => 'Tarling',
                'deskripsi' => 'Musik Tarling yang diciptakan Mang Sakim.',
                'alamat' => 'Kabupaten Indramayu',
                'koordinat' => '0.8261433810225784,113.743055486099',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 1,
                'kategori_budaya' => 'Kesenian',
                'nama' => 'Tari Randu Kentir',
                'deskripsi' => 'Tari Randu Kentir ini merupakan salah satu tarian tradisional.',
                'alamat' => 'Desa Jumbleng, Kecamatan Losarang, Kabupaten Indramayu',
                'koordinat' => '-6.383234816833577,108.1784831187735',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 1,
                'kategori_budaya' => 'Kesenian',
                'nama' => 'Bujanggaan',
                'deskripsi' => 'Nyanyian puisi tradisional di Kabupaten Indramayu.',
                'alamat' => 'Kabupaten Indramayu',
                'koordinat' => '-6.424210606457214,108.1622769376603',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 2,
                'kategori_budaya' => 'Sejarah/Tradisi',
                'nama' => 'Gombyang Dermayu',
                'deskripsi' => 'Kabupaten Indramayu dikenal sebagai daerah Pantura.',
                'alamat' => 'Kabupaten Indramayu',
                'koordinat' => '-6.427758728149481,108.19700827900748',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 2,
                'kategori_budaya' => 'Sejarah/Tradisi',
                'nama' => 'Baritan',
                'deskripsi' => 'Tradisi Baritan dilaksanakan dengan dua tujuan.',
                'alamat' => 'Kabupaten Indramayu',
                'koordinat' => '-6.400531256399547,108.17788014344802',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 2,
                'kategori_budaya' => 'Sejarah/Tradisi',
                'nama' => 'Memitu',
                'deskripsi' => 'Memitu atau prosesi tujuh bulan dalam usia bayi.',
                'alamat' => 'Kabupaten Indramayu',
                'koordinat' => '-6.425029404365387,108.12833643492179',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 2,
                'kategori_budaya' => 'Sejarah/Tradisi',
                'nama' => 'Bobotan',
                'deskripsi' => 'Bobotan adalah upacara tradisional.',
                'alamat' => 'Kecamatan Cikedung, Kabupaten Indramayu',
                'koordinat' => '-6.414111962881052,108.18047669178841',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 2,
                'kategori_budaya' => 'Kesenian',
                'nama' => 'Ronggeng Ketuk',
                'deskripsi' => 'Tari Ronggeng Ketuk merupakan kesenian tradisional.',
                'alamat' => 'Kabupaten Indramayu',
                'koordinat' => '-6.4031942875335215,108.16671460841452',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 2,
                'kategori_budaya' => 'Kesenian',
                'nama' => 'Berokan Indramayu',
                'deskripsi' => 'Berokan adalah kesenian khas Indramayu.',
                'alamat' => 'Kabupaten Indramayu',
                'koordinat' => '-6.427758728149481,108.21344922087165',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_wbtb_id' => 2,
                'kategori_budaya' => 'Kesenian',
                'nama' => 'Sandiwara',
                'deskripsi' => 'Sandiwara adalah salah satu kesenian Indramayu.',
                'alamat' => 'Kabupaten Indramayu',
                'koordinat' => '-6.365526509520705,108.19523278439408',
                'sk_gambar' => NULL,
                'document' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
