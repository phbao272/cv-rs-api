<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_skills', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("resume_id");
            $table->foreign('resume_id')->references('id')->on('resumes')->onDelete('cascade');

            $table->unsignedBigInteger("m_skill_id");
            $table->foreign('m_skill_id')->references('id')->on('m_skills')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resume_skills');
    }
}
