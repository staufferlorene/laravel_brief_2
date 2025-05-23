<?php

namespace Database\Seeders;

use App\Models\Films;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

 /*       Films::factory()->create([
            'titre' => 'Un jour à la Fab',
            'date' => '2025-01-01',
            'note' => '10',
            'commentaire' => 'Film montrant une journée type d\'un étudiant',
        ]);*/


        DB::table('films')->insert([
            ['titre' => 'Un jour à la Fab'],
            ['date' => '2025-01-01'],
            ['note' => '10'],
            ['commentaire' => 'Film montrant une journée type d\'un étudiant'],
        ]);
    }
}
