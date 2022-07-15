<?php

namespace Database\Seeders;

use App\Models\contentMenu;
use App\Models\MenuVisite;
use Illuminate\Database\Seeder;

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
        $this->call([TypeFormationSeeder::class,]);
        $this->call([TypeEnseignementSeed::class,]);
        $this->call([contentMenu::class,]);
        $this->call([MenuVisite::class,]);
    }
}
