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
        Schema::create('customer_controllers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact_num');
            $table->string('contact_num');
            $table->string('email');
            $table->text('adress');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_controllers');
    }
};