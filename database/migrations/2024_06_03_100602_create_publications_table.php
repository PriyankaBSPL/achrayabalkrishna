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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('publication_type');
            $table->string('title');
            $table->string('language');
            $table->string('image')->nullable();
            $table->string('author');
            $table->string('category');
            $table->string('publisher');
            $table->string('isbn');
            $table->string('pages');
            $table->string('country');
            $table->string('buynow_link');
            $table->longtext('description');
            $table->string('cover_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
