<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm13sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form13s', function (Blueprint $table) {
            $table->id();
            $table->integer('round')->comment('ครั้งที่');
            $table->string('year')->comment('ปีงบประมาณ');
            $table->string('office')->comment('หน่วยงาน');
            $table->string('city')->comment('จังหวัด');
            $table->dateTime('borrow_date')->nullable()->comment('วันที่ให้ยืม');
            $table->string('remark')->nullable()->comment('หมายเหตุ');
            $table->string('image')->nullable()->comment('ภาพเอกสาร');
            $table->dateTime('report')->nullable()->comment('ส่งผล');
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
        Schema::dropIfExists('form13s');
    }
}
