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
        Schema::create('tempbuques', function (Blueprint $table) {
            $table->id();
            $table->string('Fechab', 200);
            $table->string('Nodoc', 200);
            $table->string('Barco', 200);
            $table->string('Hatraque', 200);
            $table->string('Havisopre', 200);
            $table->string('Iniman', 200);
            $table->string('Fultman', 200);
            $table->string('Titotmanio', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tempbuques');
    }
};
