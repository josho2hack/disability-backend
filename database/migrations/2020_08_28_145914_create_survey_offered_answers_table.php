<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyOfferedAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_offered_answers', function (Blueprint $table) {
            $table->id()                                            ->comment('รหัสไอดี');
            $table->foreignId('user_id')                            ->comment('รหัสผู้ใช้')
                ->constrained()->onDelete('cascade');
            $table->foreignId('survey_id')                          ->comment('รหัสแบบสำรวจ')
                ->constrained()->onDelete('cascade');
            $table->foreignId('question_id')                        ->comment('รหัสคำถาม')
                ->constrained()->onDelete('cascade');
            $table->foreignId('answer_id')                          ->comment('รหัสคำตอบ')
                ->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('survey_offered_answers');
    }
}
