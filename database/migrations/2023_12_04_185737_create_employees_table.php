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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact_num')->nullable();
            $table->string('email')->nullable();
            $table->date('joindate')->nullable();
            $table->enum('gender',['male', 'female'])->nullable();
            $table->string('address')->nullable();
            $table->integer('status')->default(1)->comment('1=>active 2=>inactive');
            $table->text('description')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
