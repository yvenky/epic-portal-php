<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerRegistrationIndsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_registration_inds', function (Blueprint $table) {
            $table->id();   
            $table->string('partner_individual_first_name'); 
            $table->string('partner_individual_last_name');
            $table->string('partner_individual_email_address'); 
            $table->string('partner_individual_employment_status'); 
            $table->string('partner_individual_household_income'); 
            $table->string('partner_individual_spouse_first_name'); 
            $table->string('partner_individual_spouse_last_name'); 
            $table->string('partner_individual_spouse_email_address'); 
            $table->string('partner_individual_employment_status_spouse'); 
            $table->string('partner_individual_street');    
            $table->string('partner_individual_state'); 
            $table->string('partner_individual_city');
            $table->string('partner_individual_zip_code'); 
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
        Schema::dropIfExists('partner_registration_inds');
    }
}
