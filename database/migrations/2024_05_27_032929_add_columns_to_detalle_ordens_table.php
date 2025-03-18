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
        Schema::table('detalle_ordens', function (Blueprint $table) {
            //
            $table->string('talla')->nullable();
            $table->string('color')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detalle_ordens', function (Blueprint $table) {
            $table->dropColumn('talla')->nullable();
            $table->dropColumn('color')->nullable();
        });
    }
};
