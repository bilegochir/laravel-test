<?php

use Illuminate\Database\Seeder;

use Domain\Tasks\Task;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firstProject = Task::create([
            'title' => 'First task',
            'description' => 'The first task we created.'
        ]);
    }
}
