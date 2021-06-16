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
            $table->timestamps();
            $table->string('jobs_name');
            $table->string('phonenumber');
            $table->string('email');
            $table->longtext('jobs_desc');
            $table->longtext('minimum_qualification');
            $table->longtext('Benefits');
            $table->string('jobs_level');
            $table->string('jobs_category');
            $table->string('jobs_vacancy');
            $table->string('jobs_industry');
            $table->string('educational_recruitment');
            $table->unsignedBigInteger('id_employer');

            //FK Employer
            $table->foreign('id_employer')->references('id')->on('employer');
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
