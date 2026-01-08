<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category; // ⬅️ WAJIB ADA & TIDAK BOLEH SALAH

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Novel'],
            ['name' => 'Teknologi'],
            ['name' => 'Pendidikan'],
        ]);
    }
}
