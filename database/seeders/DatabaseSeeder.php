<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Database\Factories\ProjectFactory;
use App\Models\Project;
//use App\Models\Project;
use Database\Factories\UserFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(100)->create();

        //faz uma consulta no bd
        //em ordem aleatória, vai trazer 10 registros
        User::query()->inRandomOrder()->limit(10)->get()
            //para cada loop, cria um projeto e linka com o usuário
            ->each(fn (User $u) => Project::factory()->create(['created_by' => $u-> id]));
    }
}
