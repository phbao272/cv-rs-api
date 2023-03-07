<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();

            $table->string("title");
            $table->string("description");
            $table->unsignedInteger("number_of_recruit");
            $table->date("deadline")->nullable();
            $table->unsignedTinyInteger("active")->default(1);

            $table->unsignedBigInteger("company_id");
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');

            $table->unsignedBigInteger("m_working_from_id");
            $table->foreign('m_working_from_id')->references('id')->on('m_working_froms')->onDelete('cascade');

            $table->unsignedBigInteger("m_location_id");
            $table->foreign('m_location_id')->references('id')->on('m_locations')->onDelete('cascade');

            $table->unsignedBigInteger("m_experience_id");
            $table->foreign('m_experience_id')->references('id')->on('m_experiences')->onDelete('cascade');

            $table->unsignedBigInteger("m_salary_id");
            $table->foreign('m_salary_id')->references('id')->on('m_salaries')->onDelete('cascade');

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
        Schema::dropIfExists('jobs');
    }
}
