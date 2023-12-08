<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Car::create([
                'nama' => $faker->name,
                'merk' => $faker->word,
                'warna' => $faker->colorName,
                'transmisi' => $faker->word,
                'no_pol' => rand(1, 9),
                'no_rangka' => rand(1, 9),
                'no_mesin' => rand(1, 9),
                'bahan_bakar' => $faker->word,
                'tahun_produksi' => '2023',
                'tanggal_pajak' => '2023-12-30',
                'tanggal_stnk' => '2023-12-30',
                'pemilik' => $faker->name,
                'photo' => $faker->word,
                'status' => '1'
            ]);
        }
    }
}
