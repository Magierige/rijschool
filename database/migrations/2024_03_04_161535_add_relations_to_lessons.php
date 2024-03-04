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
        schema::table('lessons', function (Blueprint $table) {
            $table->unsignedBigInteger('vehiclel_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('teacher_user_id')->nullable();

            $table->foreign('vehiclel_id')->references('id')->on('vehicles');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('teacher_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
