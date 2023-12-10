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
        Schema::create('advancedsalaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('emp_id')->index();
            $table->foreign('emp_id')->references('id')->on('employees')->onDelete('cascade');
            $table->date ('month' );
            $table->string ('year' );
            $table->string ('asvanced_salary' );

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advancedsalaries');
    }
};
