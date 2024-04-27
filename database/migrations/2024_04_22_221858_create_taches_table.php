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
        Schema::create('taches', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained(); 
            $table->string('name');
            $table->string('description');
            // $table->enum("status", ['to do', 'in progress', 'done'])->default('to do');
            $table->enum("priority", ['low', 'medium', 'high'])->nullable();
            $table->dateTime("dateEnd");
            $table->dateTime("dateStart");
            $table->unsignedBigInteger('project_id')->nullable();
            $table->timestamps();
        });
    }


    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taches');
    }
};
