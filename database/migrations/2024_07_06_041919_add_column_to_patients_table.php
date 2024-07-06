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
        Schema::table('patients', function (Blueprint $table) {
            $table->string('area')->nullable();
            // $table->string('prescriptions')->nullable()->after('city');
            // $table->text('comment')->nullable()->after('prescriptions');
            // $table->text('phlebo_comment')->nullable()->after('comment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn(['area']);
        });
    }
};
