<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
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
            Customer::create([
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'kode_pos' => $faker->postcode,
                'no_identitas' => $faker->unique()->numberBetween(1, 10),
                'telepon' => rand(111111111, 999999999),
                'email' => $faker->email,
                'photo_url' => $faker->word,
                'status' => '1'
            ]);
        }
    }
}
