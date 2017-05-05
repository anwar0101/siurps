<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->integer('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('department_code');
            $table->foreign('department_code')->references('code')->on('departments');

            $table->integer('reg')->unsigned();
            $table->primary('reg');

            $table->string('name');
            $table->date('dob');

            $table->string('father_name');
            $table->string('mother_name');
            $table->string('present_address');
            $table->string('permanent_address');

            $table->string('contact');
            $table->string('picture');
            $table->string('semester');
            $table->float('cgpa');

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
        Schema::dropIfExists('students');
    }
}
