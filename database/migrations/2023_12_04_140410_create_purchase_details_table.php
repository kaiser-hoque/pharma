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
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('purchase_id');
            $table->unsignedBigInteger('medicine_id')->nullable();
            $table->decimal('quantity',10,2)->default(0);
            $table->decimal('unit_price',10,2)->default(0);
            $table->decimal('sub_amount',10,2)->default(0);
            $table->decimal('tax',10,2)->default(0);
            $table->integer('discount_type')->comment('0 amount, 1 percent')->default(0)->nullable();
            $table->decimal('discount',10,2)->default(0);
            $table->decimal('total_amount',10,2)->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_details');
    }
};
