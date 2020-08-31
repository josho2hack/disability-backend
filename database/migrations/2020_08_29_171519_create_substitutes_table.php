<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('substitutes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->comment('รหัสผู้ใช้');
            $table->string('title')->nullable()->comment('คำนำหน้า');
            $table->string('first_name')->nullable()->comment('ชื่อ');
            $table->string('last_name')->nullable()->comment('นามสกุล');
            $table->string('related')->nullable()->comment('เกี่ยวข้องเป็น');
            $table->datetime('proxy_date')->nullable()->comment('หนังสือมอบอำนาจลงวันที่');
            $table->datetime('brithday')->nullable()->comment('วันกิด');
            $table->string('citizen_id')->nullable()->comment('เลขประชาชน');
            $table->string('house_no')->nullable()->comment('บ้านเลขที่');
            $table->string('village_no')->nullable()->comment('หมู่ที่');
            $table->string('lane')->nullable()->comment('ซอย');
            $table->string('sub_district')->nullable()->comment('ตำบล');
            $table->string('district')->nullable()->comment('อำเภอ');
            $table->string('province')->nullable()->comment('จังหวัด');
            $table->string('postal_code')->nullable()->comment('รหัสไปรษณีย์');
            $table->string('tel')->nullable()->comment('เบอร์โทร');
            $table->string('email')->nullable()->comment('อีเมล์');
            $table->string('degree')->nullable()->comment('ระดับการศึกษา');
            $table->string('edu_place')->nullable()->comment('สถานที่ศึกษา');
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
        Schema::dropIfExists('substitutes');
    }
}
