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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('first_name', 50); // Tên học sinh
            $table->string('last_name', 50); // Họ đệm
            $table->date('date_of_birth'); // Ngày sinh
            $table->string('parent_phone', 20)->nullable(); // Số điện thoại phụ huynh
            $table->foreignId('class_id') // Khóa ngoại liên kết với bảng classes
            ->constrained('classes')
                ->onDelete('cascade');
            $table->timestamps(); // Tự động tạo created_at và updated_at
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
