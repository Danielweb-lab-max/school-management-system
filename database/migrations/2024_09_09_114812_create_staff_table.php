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
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id')->primary(); // Primary key with auto-increment
            $table->string('first_name'); // Staff's first name
            $table->string('last_name'); // Staff's last name
            $table->string('email')->unique(); // Email, unique for each staff member
            $table->string('phone')->nullable(); // Phone number (optional)
            $table->string('position'); // Staff's position/job title
            $table->enum('status', ['active', 'inactive']); // Employment status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
