<?php

use App\Task;
use App\Employee;

use Illuminate\Database\Seeder;


class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class,40)
        -> create()
        -> each(function($task){

          $emp = Employee::inRandomOrder()
                -> take(rand(5,10))
                -> get();

          $task -> employees() -> attach($emp);

        });
    }
}
