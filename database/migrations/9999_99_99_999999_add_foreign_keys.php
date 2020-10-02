<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::table('employees', function (Blueprint $table) {
            $table -> foreign('location_id', 'emp-loc')
                   -> references('id')
                   -> on('locations');
        });

      Schema::table('employee_task', function (Blueprint $table) {
              $table -> foreign('task_id', 'emp-task')
                     -> references('id')
                     -> on('tasks');

              $table -> foreign('employee_id', 'task-emp')
                      -> references('id')
                      -> on('employees');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('employees', function (Blueprint $table) {
            $table -> dropForeign('emp-loc');
        });

      Schema::table('employee_task', function (Blueprint $table) {

              $table -> dropForeign('emp-task');
              $table -> dropForeign('task-emp');
              
          });
    }
}
