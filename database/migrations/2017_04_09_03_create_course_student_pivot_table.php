<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class createCourseStudentPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_student', function (Blueprint $table) {
            $table->string('course_code')->index();
            $table->foreign('course_code')->references('code')->on('courses')->onDelete('cascade');
            $table->integer('student_reg')->unsigned()->index();
            $table->foreign('student_reg')->references('reg')->on('students')->onDelete('cascade');
            $table->primary(['course_code', 'student_reg']);

            $table->integer('final_marks');
            $table->integer('sessonal_marks');
            $table->integer('midterm_marks');
            $table->float('grade_point');

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
        Schema::drop('course_student');
    }
}
