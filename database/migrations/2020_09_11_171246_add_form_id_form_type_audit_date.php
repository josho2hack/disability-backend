<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFormIdFormTypeAuditDate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form07s', function (Blueprint $table) {
            $table->unsignedBigInteger('form_id')->after('round')->comment('รหัสฟอร์ม');
            $table->string('form_type')->after('form_id')->comment('ชนิดฟอร์ม');
            $table->dateTime('audit_date')->nullable()->comment('วันที่ตรวจสอบผ่าน');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form07s', function (Blueprint $table) {
            //
        });
    }
}
