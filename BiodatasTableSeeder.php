<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Biodatas TableSeeder extends Seeder
{

    public function run() 
    {
        DB::table('biodatas')->insert([
            [

                  'first_name' => 'sapira',
                  'last_name' => 'vevek',
                  'gender' => 'female',
                  'created at' => now(),
                  'updated at' => now(),
            ],
            [
                  'first_name' => 'uci',
                  'last name' => 'Seoki', 
                  'gender' => 'male',
                  'created at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
