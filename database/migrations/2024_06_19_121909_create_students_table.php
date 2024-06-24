<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id'); 
            
            // Other fields
            $table->string('name');
            $table->string('email')->unique();
            $table->string('address'); // Adding address field
            $table->string('phone_number')->nullable(); // Assuming phone number can be nullable
            
            // Foreign key to program_id
            $table->foreignId('program_id');
            
            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
