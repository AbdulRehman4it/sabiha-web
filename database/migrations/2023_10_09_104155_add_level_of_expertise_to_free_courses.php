<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLevelOfExpertiseToFreeCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('free_courses', function (Blueprint $table) {
            $table->string('level_of_expertise')->nullable();
            
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('free_courses', function (Blueprint $table) {
            $table->dropColumn('level_of_expertise')->nullable();

            //

        });
    }
}
