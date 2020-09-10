<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm01sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form01s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->comment('รหัสผู้ใช้');
            $table->unsignedBigInteger('substitute_id')->nullable()->comment('รหัสผู้ยื่นคำขอแทน');
            $table->unsignedBigInteger('asset_id')->nullable()->comment('รหัสอุปกรณ์');
            $table->enum('type_status',['1','2'])->default(1)->comment('ประเภท 1 คนพิการ, 2 ผู้ยื่นคำขอแทน');
            $table->enum('send_status',['0', '1', '2', '3'])->default(0)->comment('สถานะการส่ง 0 ยังไม่ส่ง, 1ส่งแล้ว , 2ยอมรับ, 3ปฏิเสธ');
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
        Schema::dropIfExists('form01s');
    }
}
