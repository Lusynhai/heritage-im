<?php
namespace Database\Seeders;

use App\Models\KategoriWbtb;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Seeder lain
        $this->call([
            AdminSeeder::class,
            WBTBSeeder::class,
            // Seeder lainnya
        ]);
        KategoriWbtb::create(
            [
                'nama'=>'Nasional'
            ]
        );
        KategoriWbtb::create(
            [
                'nama'=>'Provinsi'
            ]
        );
        KategoriWbtb::create(
            [
                'nama'=>'Kabupaten'
            ]
        );
    }
}
