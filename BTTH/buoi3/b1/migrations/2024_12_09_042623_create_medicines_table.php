<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id('medicine_id'); // Khóa chính
            $table->string('name', 255); // Tên thuốc
            $table->string('brand', 100)->nullable(); // Thương hiệu (tùy chọn)
            $table->string('dosage', 50); // Liều lượng
            $table->string('form', 50); // Dạng thuốc
            $table->decimal('price', 10, 2); // Giá
            $table->integer('stock'); // Số lượng tồn kho
            $table->timestamps(); // Cột created_at, updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
