<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSubstituteIdToFormBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_borrows', function (Blueprint $table) {
            $table->unsignedBigInteger('substitute_id')->after('user_id')->nullable()->comment('รหัสผู้ยื่นคำขอยืมแทน');
            $table->string('objective')->after('power_attorney')->nullable()->comment('สถานที่ศึกษา');
            $table->string('accessorie_list')->after('objective')->nullable()->comment('รายการอุปกรณ์');
            $table->string('accessorie_no')->after('accessorie_list')->nullable()->comment('เลขที่อุปกรณ์');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_borrows', function (Blueprint $table) {
            //
        });
    }
}
