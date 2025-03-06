<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cars')->insert([
            ['make' => 'Toyota', 'model' => 'Corolla', 'year' => 2020, 'miles' => 25000],
            ['make' => 'Honda', 'model' => 'Civic', 'year' => 2019, 'miles' => 30000],
            ['make' => 'Ford', 'model' => 'Mustang', 'year' => 2022, 'miles' => 15000],
            ['make' => 'Chevrolet', 'model' => 'Camaro', 'year' => 2021, 'miles' => 18000],
            ['make' => 'Nissan', 'model' => 'Altima', 'year' => 2020, 'miles' => 22000],
            ['make' => 'BMW', 'model' => 'X5', 'year' => 2021, 'miles' => 12000],
            ['make' => 'Mercedes-Benz', 'model' => 'C-Class', 'year' => 2019, 'miles' => 27000],
            ['make' => 'Audi', 'model' => 'A4', 'year' => 2021, 'miles' => 16000],
            ['make' => 'Hyundai', 'model' => 'Elantra', 'year' => 2020, 'miles' => 21000],
            ['make' => 'Kia', 'model' => 'Sorento', 'year' => 2018, 'miles' => 40000],
            ['make' => 'Subaru', 'model' => 'Forester', 'year' => 2022, 'miles' => 10000],
            ['make' => 'Mazda', 'model' => 'CX-5', 'year' => 2019, 'miles' => 28000],
            ['make' => 'Volkswagen', 'model' => 'Jetta', 'year' => 2021, 'miles' => 17000],
            ['make' => 'Tesla', 'model' => 'Model 3', 'year' => 2022, 'miles' => 5000],
            ['make' => 'Dodge', 'model' => 'Charger', 'year' => 2020, 'miles' => 26000],
            ['make' => 'Jeep', 'model' => 'Wrangler', 'year' => 2019, 'miles' => 35000],
            ['make' => 'GMC', 'model' => 'Sierra', 'year' => 2021, 'miles' => 13000],
            ['make' => 'Ram', 'model' => '1500', 'year' => 2020, 'miles' => 24000],
            ['make' => 'Lexus', 'model' => 'RX 350', 'year' => 2022, 'miles' => 11000],
            ['make' => 'Cadillac', 'model' => 'Escalade', 'year' => 2019, 'miles' => 30000],
        ]);
    }
}
