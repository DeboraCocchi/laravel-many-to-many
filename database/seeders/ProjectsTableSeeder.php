<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<30; $i++){
            $new_project=new Project();
            $new_project->name=$faker->sentence(3);
            $new_project->slug=Project::generateSlug($new_project->name);
            $new_project->created=$faker->dateTimeBetween('-50 week');
            $new_project->client_name=ucfirst($faker->word());
            $new_project->summary=$faker->paragraphs(1, true);
            $new_project->cover_image=$faker->imageUrl(640, 480, 'Project', true);
            $new_project->save();
        }
    }
}
