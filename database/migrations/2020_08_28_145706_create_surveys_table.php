<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id()                                                ->comment('รหัสไอดี');
            $table->foreignId('survey_type_id')                         ->comment('รหัสประเภท')
                ->constrained()->onDelete('cascade');
            $table->text('name')                                        ->comment('ชื่อโพล');
            $table->integer('number_of_question')->default(0)           ->comment('จำนวนคำถาม');
            $table->boolean('is_active')->default(0)                    ->comment('ใช้งาน');
            $table->dateTime('start_date')                              ->comment('วันที่เริ่ม');
            $table->dateTime('end_date')                                ->comment('วันที่สิ้นสุด');
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
        Schema::dropIfExists('surveys');
    }
}
