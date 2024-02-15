<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Parent Category A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Parent Category B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Parent Category C',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        Category::factory(7)->create();
    }
}
