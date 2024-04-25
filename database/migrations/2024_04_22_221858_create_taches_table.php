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
            $table->string('name');
            $table->text('description')->nullable();
            // $table->foreignId('espace_id')->constrained('espaces')->onDelete('cascade');
            // $table->foreignId('assigned_to')->constrained('users');
            $table->foreignId('created_by')->constrained('users');
            // $table->foreignId('updated_by')->constrained('users');
            // $table->string('status')->nullable(); 
            // $table->string('priority')->nullable();
            // $table->dateTime('deadline')->nullable(); 
            // $table->string('due_date')->nullable(); 
            // $table->string('image_path')->nullable(); 
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
