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
        Schema::create('productos_views', function (Blueprint $table) {
            $table->id();
            $table->string('title1section')->nullable();
            $table->string('subtitle1section')->nullable();

            $table->string('title2section')->nullable();
            $table->text('description2section')->nullable();
            $table->string('url_image2section')->nullable();

            $table->string('title3section')->nullable();
            $table->text('description3section')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos_views');
    }
};
