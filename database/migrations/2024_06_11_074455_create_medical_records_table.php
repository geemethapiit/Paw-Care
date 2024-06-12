<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id(); // Record ID (unique identifier)
            $table->string('pet_name'); // Pet ID (string)
            $table->string('customer_name'); // Customer ID (string)
            $table->date('date_of_record'); // Date of Record
            $table->string('treatment_given'); // Treatment Given
            $table->string('veterinarian_name'); // Veterinarian ID (string)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('medical_records');
    }
}
