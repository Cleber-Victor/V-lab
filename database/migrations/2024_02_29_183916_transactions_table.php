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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->boolean('type'); // 0 recebeu 1 pagou
            $table->string('valor');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            
        });
    }

    /**s
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
