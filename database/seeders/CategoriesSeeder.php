<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 1000000; $i++) { 
            DB::table('categories')->insert([
                'categories_id' => "1",
                'categories_name' => "an",
            ]);
        }
    }
}
