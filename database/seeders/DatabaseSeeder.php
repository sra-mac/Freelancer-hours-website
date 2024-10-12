<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Database\Factories\ProjectFactory;
use App\Models\Project;
use App\Models\Proposal;
use Database\Factories\UserFactory;
use Database\Factories\ProposalFactory;

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
            //lambda ->each(fn (User $u) => Project::factory()->create(['created_by' => $u-> id]));
            ->each(function (User $u) {
                $project = Project::factory()->create(['created_by' => $u-> id]);

                Proposal::factory()->count(random_int(4, 45))->create(['project_id' => $project->id]);
            
            });
    }
}
