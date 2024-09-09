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
            $table->bigIncrements('id')->primary();
            $table->string('first_name'); // Student's first name
            $table->string('last_name'); // Student's last name
            $table->string('email')->unique(); // Email, unique for each student
            $table->date('birthdate')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable(); // Gender, optional
          $table->string('phone')->nullable(); // Contact number, optional
         $table->string('address')->nullable(); // Student's address
         $table->string('image')->nullable(); // Profile image, optional
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
