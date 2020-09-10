<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormSinglesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_singles', function (Blueprint $table) {
            $table->id();
            $table->string('ref')->nullable()->comment('อ้างอิง');
            $table->unsignedBigInteger('user_id')->nullable()->comment('รหัสผู้ใช้');
            $table->unsignedBigInteger('substitute_id')->nullable()->comment('รหัสผู้ยื่นคำขอแทน');
            $table->unsignedBigInteger('asset_id')->nullable()->comment('รหัสอุปกรณ์');
            $table->string('type_form')->nullable()->comment('ชนิดฟอร์ม');
            $table->enum('type_status',['1','2'])->default(1)->comment('ประเภท 1 คนพิการ, 2 ผู้ยื่นคำขอแทน');
            $table->enum('send_status',['0', '1'])->default(0)->comment('สถานะการส่ง');
            $table->dateTime('send_date')->nullable()->comment('วันที่ส่ง');
            $table->text('objective')->nullable()->comment('วัตถุประสงค์');
            $table->string('accessorie_list')->nullable()->comment('รายการอุปกรณ์');
            $table->string('accessorie_no')->nullable()->comment('เลขที่อุปกรณ์');
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
        Schema::dropIfExists('form_singles');
    }
}
