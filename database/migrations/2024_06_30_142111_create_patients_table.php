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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_secondary')->nullable();
            $table->string('email')->nullable();
            $table->string('email_secondary')->nullable();
            $table->string('address')->nullable();
            $table->string('pincode')->nullable();
            $table->string('aadhar_number')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('srf_id')->nullable();
            $table->string('avatar')->nullable();
            $table->string('last_activity')->nullable();
            $table->string('prescriptions')->nullable();
            $table->string('city')->nullable();
            $table->text('comment')->nullable();
            $table->text('phlebo_comment')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
