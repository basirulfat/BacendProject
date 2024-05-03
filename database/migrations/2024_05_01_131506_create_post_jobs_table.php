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
             $table->unsignedBigInteger('company_id'); // Existing link to companies table
            $table->unsignedBigInteger('user_id'); // Added linkage to users table
        
            // Job specific fields
            $table->string('jobTitle', 100);
            $table->string('jobDescription',10000)->nullable(); // Reasonably adjusted length
            $table->string('applyLink', 150)->nullable();
            $table->string('jobType', 100);
            $table->string('location', 100)->unique(); // Ensured to be unique
            $table->string('skills', 100)->nullable();
            $table->text('logo')->nullable();
            $table->integer('experience');
            $table->string('seniority', 100);
            $table->decimal('salary', 8, 2)->nullable();
            $table->date('postingTime')->nullable();
            $table->date('expairTime')->nullable();
        
            $table->timestamps(); // Tracks created and updated time
        
            // Foreign Key Constraints
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Adding foreign key reference
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
