<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();

            $table->string("name");
            $table->string("title")->nullable();
            $table->string('email')->unique();
            $table->date("birthday");
            $table->string("phone_number");
            $table->string("avatar")->nullable();

            $table->unsignedBigInteger("m_job_id");
            $table->foreign('m_job_id')->references('id')->on('m_jobs')->onDelete('cascade');

            $table->unsignedBigInteger("user_id");
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger("m_location_id");
            $table->foreign('m_location_id')->references('id')->on('m_locations')->onDelete('cascade');

            $table->unsignedBigInteger("m_education_level_id");
            $table->foreign('m_education_level_id')->references('id')->on('m_education_levels')->onDelete('cascade');

            $table->unsignedBigInteger("m_experience_id");
            $table->foreign('m_experience_id')->references('id')->on('m_experiences')->onDelete('cascade');

            $table->unsignedBigInteger("m_working_form_id");
            $table->foreign('m_working_form_id')->references('id')->on('m_working_forms')->onDelete('cascade');

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
        Schema::dropIfExists('resumes');
    }
}
