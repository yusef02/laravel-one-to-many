<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $projects = config('projects');
        $types = Type::all()->pluck('id');

        foreach ($projects as $project) {
            $new_project = new Project();
            $new_project->fill($project);
            $new_project->type_id = $faker->randomElement($types);
            $new_project->save();
        }
    }
}
