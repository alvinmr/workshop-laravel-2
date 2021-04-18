<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('products')->insert(
            [
                [
                    'category_id' => 1,
                    'name' => 'Bakso Ayam Lagi',
                    'desc' => 'Bakso paling enak sejaagad raya',
                    'photo' => 'bakso_ayam.jpg',
                    'price' => 20000
                ],
                [
                    'category_id' => 1,
                    'name' => 'Bakso Ayam Lagi 2',
                    'desc' => 'Bakso paling enak sejaagad raya',
                    'photo' => 'bakso_ayam.jpg',
                    'price' => 20000
                ],
                [
                    'category_id' => 1,
                    'name' => 'Bakso Ayam Lagi 3',
                    'desc' => 'Bakso paling enak sejaagad raya',
                    'photo' => 'bakso_ayam.jpg',
                    'price' => 20000
                ],
                [
                    'category_id' => 1,
                    'name' => 'Bakso Ayam Lagi 4',
                    'desc' => 'Bakso paling enak sejaagad raya',
                    'photo' => 'bakso_ayam.jpg',
                    'price' => 20000
                ]
            ]
        );
    }
}
