<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->enum('grade_level', ['Pre-K', 'Kindergarten']); // Cấp độ lớp
            $table->string('room_number', 10); // Phòng học
            $table->timestamps(); // Tự động tạo created_at và updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
