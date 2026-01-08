<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book; // ⬅️ INI YANG KURANG

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            [
                'title' => 'Laravel untuk Pemula',
                'author' => 'Andi',
                'year' => 2022,
                'category_id' => 2,
            ],
            [
                'title' => 'Belajar PHP',
                'author' => 'Budi',
                'year' => 2021,
                'category_id' => 2,
            ],
            [
                'title' => 'Novel Senja',
                'author' => 'Citra',
                'year' => 2020,
                'category_id' => 1,
            ],
        ]);
    }
}
