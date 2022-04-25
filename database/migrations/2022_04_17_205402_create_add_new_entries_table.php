<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddNewEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_new_entries', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('add_partner_entity_name'); 
            $table->string('add_partner_entity_ein');
            $table->string('add_partner_entity_docs'); 
            $table->string('add_partner_managing_member_1'); 
            $table->string('add_partner_managing_member_2')->nullable();
            $table->string('add_partner_entity_address_street'); 
            $table->string('add_partner_entity_address_city'); 
            $table->string('add_partner_entity_address_state'); 
            $table->string('add_partner_entity_address_zipcode'); 
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
        Schema::dropIfExists('add_new_entries');
    }
}
