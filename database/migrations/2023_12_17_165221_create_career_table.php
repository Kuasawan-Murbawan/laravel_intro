<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * positions -> varchar 240 char
     * salary -> integer 0
     * created_at
     * updated_At
     */
    public function up(): void
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table -> string('position');
            $table -> unsignedInteger('salary')-> default(3500);
            $table->timestamps(); // automatically execute "created_at" & "updated_At"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career');
    }
};
