<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Location;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employee::class,20)
        -> make()
        -> each(function($emp){

          $loc = Location::inRandomOrder() -> first();
          
          $emp -> location() -> associated($loc);

          $emp -> save();

        });
    }
}
