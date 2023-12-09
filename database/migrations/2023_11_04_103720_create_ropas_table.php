<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('ropas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('size');
            $table->string('color');
            $table->string('description');
            $table->string('brand');
            $table->decimal('price', 8, 2);
            $table->string('image');
           
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('ropas');
    }
};
