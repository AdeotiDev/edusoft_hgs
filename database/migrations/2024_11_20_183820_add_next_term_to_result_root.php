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
        Schema::table('result_roots', function (Blueprint $table) {
            //
            $table->date('next_term')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('result_roots', function (Blueprint $table) {
            //
            $table->dropColumn('next_term');
        });
    }
};
