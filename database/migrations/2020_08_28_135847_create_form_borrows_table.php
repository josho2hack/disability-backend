<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_borrows', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->->comment('รหัสผู้ใช้');
            $table->string('write_at')->nullable()->->comment('เขียนที่');
            $table->unsignedBigInteger('copy_card')->nullable()->->comment('สำเนาบัตรประจำตัวคนพิการ');
            $table->unsignedBigInteger('house_res')->nullable()->->comment('สำเนาทะเบียนบ้านคนพิการ');
            $table->unsignedBigInteger('copy_train')->nullable()->->comment('สำเนารับรองการเข้าฝึกอบรม');
            $table->unsignedBigInteger('sub_copy_citizen_id')->nullable()->->comment('สำเนาบัตรประชาชน ,สำเนาทะเบียนบ้าน');
            $table->unsignedBigInteger('power_attorney')->nullable()->->comment('หนังสือมอบอำนาจ');
            $table->enum('type', ['1', '2'])
                ->default('1')
                ->comment('ประเภท 1 คนพิการ, 2 ผู้ยื่นคำขอแทน');
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
        Schema::dropIfExists('form_borrows');
    }
}
