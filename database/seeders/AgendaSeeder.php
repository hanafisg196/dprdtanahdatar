<?php

namespace Database\Seeders;

use App\Models\Agenda;
use App\Models\AgendaCategory;
use App\Models\Article;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'test@example.com')->first();
        $category = AgendaCategory::first();
        for ($i = 1; $i <= 12; $i++) {
            Agenda::create([
                'title' => 'Article Test' . $i,
                'waktu_mulai' => Carbon::now(),
                'waktu_selesai' => Carbon::now(),
                'tempat' => 'Article Test' . $i,
                'cat_id' => $category->id,
                'user_id' => $user->id
            ]);
        }
    }
}
