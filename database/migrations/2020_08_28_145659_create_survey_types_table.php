<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_types', function (Blueprint $table) {
            $table->id()                        ->comment('รหัสไอดี');
            $table->string('name')              ->comment('ชื่อ');
            $table->string('slug')              ->comment('ชื่อเรียก');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_types');
    }
}
