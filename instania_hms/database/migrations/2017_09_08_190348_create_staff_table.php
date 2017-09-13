<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('staff', function (Blueprint $table) {
             $table->increments('id');
             $table->string('staffID');
             $table->string('hospitalID');
             $table->string('firstname');
             $table->string('middlename');
             $table->string('surname');
             $table->string('pos',70);
             $table->string('email',70)->unique();
             $table->string('password');
             $table->string('number');
             $table->string('gen');
             $table->string('department');
             $table->rememberToken();
             $table->timestamps();
         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
