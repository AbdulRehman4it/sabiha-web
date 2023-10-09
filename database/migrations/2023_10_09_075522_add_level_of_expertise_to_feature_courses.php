<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLevelOfExpertiseToFeatureCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feature_courses', function (Blueprint $table) {
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
        Schema::table('feature_courses', function (Blueprint $table) {
            
            $table->dropColumn('level_of_expertise')->nullable();

            //
        });
    }
}
