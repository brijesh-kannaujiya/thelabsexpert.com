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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('vial_id');
            $table->unsignedBigInteger('specimen_id');
            $table->string('test_name');
            $table->string('test_code')->nullable();
            $table->string('mrp_price');
            $table->string('price');
            $table->string('report_date')->nullable();
            $table->string('fasting')->nullable();
            $table->string('customer_instructions')->nullable();
            $table->string('phlebo_instructions')->nullable();
            $table->string('icon')->nullable();
            $table->string('banner')->nullable();
            $table->string('short_desc')->nullable();
            $table->longText('desc_1')->nullable();
            $table->longText('desc_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('vial_id')->references('id')->on('vials')->onDelete('cascade');
            $table->foreign('specimen_id')->references('id')->on('specimens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
