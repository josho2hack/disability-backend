<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAttributesToForm01s extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form01s', function (Blueprint $table) {
            $table->string('office')->comment('หน่วยงาน')->default('สำนักงานปลัดกระทรวงเทคโนโลยีสารสนเทศและการสื่อสาร');
            $table->string('city')->comment('จังหวัด')->default('กรุงเทพมหานคร');
            $table->string('remark')->nullable()->comment('หมายเหตุ');
            $table->string('image')->nullable()->comment('ภาพเอกสาร');
            $table->dateTime('audit_date')->nullable()->comment('วันที่ตรวจสอบผ่าน');
            $table->dateTime('approve_date')->nullable()->comment('วันที่อนุมัติ');
            $table->foreignId('form07s_id')->nullable()->comment('ทก.07')->constrained()->onDelete('set null');
            $table->foreignId('form09s_id')->nullable()->comment('ทก.09')->constrained()->onDelete('set null');
            $table->foreignId('form10s_id')->nullable()->comment('ทก.10')->constrained()->onDelete('set null');
            $table->foreignId('form05s_id')->nullable()->comment('ทก.05')->constrained()->onDelete('set null');
            $table->foreignId('form13s_id')->nullable()->comment('ทก.13')->constrained()->onDelete('set null');
            $table->foreignId('doc_notifies_id')->nullable()->comment('หนังสือแจ้งผลการอนุมัติ')->constrained()->onDelete('set null');
            $table->foreignId('doc_contracts_id')->nullable()->comment('หนังสือสัญญา')->constrained()->onDelete('set null');
            $table->foreignId('doc_garuntee_id')->nullable()->comment('หนังสือค้ำประกัน')->constrained()->onDelete('set null');
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
