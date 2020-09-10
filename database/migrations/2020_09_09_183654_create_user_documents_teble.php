<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDocumentsTeble extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->comment('รหัสผู้ใช้');
            $table->unsignedBigInteger('form_id')->nullable()->comment('รหัสฟอร์ม');
            $table->text('copy_card')->nullable()->comment('สำเนาบัตรประจำตัวคนพิการ');
            $table->text('house_res')->nullable()->comment('สำเนาทะเบียนบ้านคนพิการ');
            $table->text('copy_train')->nullable()->comment('สำเนารับรองการเข้าฝึกอบรม');
            $table->text('sub_copy_citizen_id')->nullable()->comment('สำเนาบัตรประชาชน ,สำเนาทะเบียนบ้าน');
            $table->text('power_attorney')->nullable()->comment('หนังสือมอบอำนาจ');
            $table->string('type')->nullable()->comment('ชนิดแบบฟอร์ม');
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
        Schema::dropIfExists('user_documents');
    }
}
