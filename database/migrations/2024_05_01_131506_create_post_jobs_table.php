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
        Schema::create('post_jobs', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('user_id'); // Added linkage to users table
            $table->unsignedBigInteger('company_id');
            // Job specific fields
            $table->string('jobTitle', 100);
            $table->string('jobDescription',10000)->nullable(); // Reasonably adjusted length
            $table->string('category', 100);
            $table->string('applyLink', 150)->nullable();
            $table->string('jobType', 100);
            $table->string('location', 100); // Ensured to be unique
            $table->string('skills', 100)->nullable();
            $table->text('logo')->nullable();
            $table->text('experience');
            $table->string('seniority', 100);
            $table->text('salary', 20)->nullable();
            $table->date('postingTime')->nullable();
            $table->date('expairTime')->nullable();
        
            $table->timestamps(); // Tracks created and updated time
        
            // Foreign Key Constraints
        
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade'); // Adding foreign key reference
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_jobs');
    }
};
