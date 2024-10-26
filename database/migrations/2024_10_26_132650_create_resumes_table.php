<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('summary');
            $table->string('education');
            $table->string('experience_title');
            $table->date('experience_date');
            $table->text('experience_details');
            $table->text('skills');
            $table->text('projects');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('resumes');
    }
    
};
