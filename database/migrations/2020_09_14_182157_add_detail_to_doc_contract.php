<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailToDocContract extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doc_contracts', function (Blueprint $table) {
            $table->string('sub_district')->nullable()->comment('เขต');
            $table->string('district')->nullable()->comment('แขวง');
            $table->string('PS_name')->nullable()->comment('ชื่อปลัดกระทรวง');
            $table->string('position')->nullable()->comment('ตำแหน่ง');
            $table->dateTime('return_date')->nullable()->comment('วันที่ส่งคืน');
            $table->string('estimate_day')->nullable()->comment('วันที่ประมาณการส่งคืน');
            $table->string('fines')->nullable()->comment('ค่าปรับ/วัน');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doc_contracts', function (Blueprint $table) {
            //
        });
    }
}
