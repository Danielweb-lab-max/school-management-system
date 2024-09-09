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
        Schema::create('schools', function (Blueprint $table) {
            $table->bigIncrements('id')->primary(); // Primary key with auto-increment
            $table->string('school_name'); // School name
            $table->string('enrollment_prefix'); // Enrollment prefix
            $table->string('phone')->nullable(); // Phone number (optional)
            $table->string('email')->nullable(); // Email address (optional)
            $table->text('address')->nullable(); // Address (optional)
            $table->integer('enrollment_base_number'); // Enrollment base number
            $table->integer('enrollment_base_padding'); // Enrollment base padding
            $table->string('admission_prefix'); // Admission prefix
            $table->integer('admission_base_number'); // Admission base number
            $table->integer('admission_base_padding'); // Admission base padding
            $table->enum('status', ['active', 'inactive']); // Status with enum values
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
