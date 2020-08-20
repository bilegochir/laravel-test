<?php

use Illuminate\Database\Seeder;

use Domain\Projects\Project;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firstProject = Project::create([
            'title' => 'First project',
            'description' => 'The first project we created.'
        ]);
    }
}
