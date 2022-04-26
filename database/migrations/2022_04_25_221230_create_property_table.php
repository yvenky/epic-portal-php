<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('property_address'); 
            $table->string('property_of_acres')->nullable();
            $table->string('property_map_right_url');
            $table->string('property_contract_url')->nullable();
            $table->string('property_survey_url')->nullable();
            $table->string('property_closing_documents')->nullable();
            $table->string('property_appraisal')->nullable();
            $table->string('property_phase_env_inspection')->nullable();
            $table->string('property_attorney_feedback')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
