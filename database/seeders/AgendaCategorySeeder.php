<?php

namespace Database\Seeders;

use App\Models\AgendaCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgendaCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            AgendaCategory::create([
                'nama' => 'KategoriAgenda' . $i,
            ]);
        }
    }
}
