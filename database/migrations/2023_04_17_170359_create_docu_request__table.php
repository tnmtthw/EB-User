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
        Schema::create('docu_request', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('lastname')->nullable();
            $table->string('address')->nullable();
            $table->string('bday')->nullable();
            $table->string('por')->nullable();
            $table->string('pob')->nullable();
            $table->string('voter')->nullable();
            $table->string('howner')->nullable();
            $table->string('rhowner')->nullable();
            $table->string('roa')->nullable();
            $table->string('image')->nullable();
            $table->enum('type', ['Barangay Clearance', 'Barangay ID']);
            $table->enum('status', ['0', '1', '2', '3', '4'])->default('0');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docu_Request');
    }
};
