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
        Schema::create('gruastiempo', function (Blueprint $table) {
            $table->id();
            $table->string('date', 200);
            $table->string('vessel', 200);
            $table->string('totaltime', 200);
            $table->string('code', 200);
            $table->string('observations', 200);
            $table->string('time', 200);
            $table->string('maniobras', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gruastiempo');
    }
};
