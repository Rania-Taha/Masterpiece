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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('image')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('password'); // Use Laravel's password hashing
            $table->timestamp('email_verified_at')->nullable();           
            $table->enum('role', ['admin','user','provider'])->default('user');
            $table->unsignedBigInteger('clinic_id')->nullable();
            $table->timestamps();
            $table->rememberToken();
            $table->foreign('clinic_id')->references('id')->on('clinics');
        });
        
    }

    /**
     * Reverse the migrations.php artisan migrate:rollback

     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
















