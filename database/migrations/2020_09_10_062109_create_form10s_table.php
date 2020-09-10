<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm10sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form10s', function (Blueprint $table) {
            $table->id();
            $table->integer('round')->comment('ครั้งที่');
            $table->string('year')->comment('ปีงบประมาณ');
            $table->string('offcie')->comment('หน่วยงาน');
            $table->string('city')->comment('จังหวัด');
            $table->dateTime('report')->nullable()->comment('วันที่ส่งผล');
            $table->string('image')->nullable()->comment('ภาพเอกสาร');
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
        Schema::dropIfExists('form10s');
    }
}
