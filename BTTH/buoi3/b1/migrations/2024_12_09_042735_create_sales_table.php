<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id('sale_id'); // Khóa chính
            $table->foreignId('medicine_id') // Khóa ngoại
            ->constrained('medicines', 'medicine_id') // Tham chiếu đến bảng medicines
            ->onDelete('cascade');
            $table->integer('quantity'); // Số lượng bán ra
            $table->dateTime('sale_date'); // Ngày giờ bán hàng
            $table->string('customer_phone', 10)->nullable(); // Số điện thoại khách hàng (tùy chọn)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
