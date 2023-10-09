<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatedCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('related_courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_image')->nullable();
            $table->string('course_title')->nullable();
            $table->string('course_desc')->nullable();
            $table->string('course_overview')->nullable();
            $table->string('comment')->nullable();
            $table->string('time')->nullable();
            $table->string('date')->nullable();
            $table->string('save')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('profile_name')->nullable();
            $table->string('r_category')->nullable();
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
        Schema::dropIfExists('related_courses');
    }
}
