<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string("code")->comment('เลขที่ครุภัณฑ์');
            $table->year("year")->comment('ปีครุภัณฑ์');
            $table->string("version")->comment('รุ่น');
            $table->string("serial_no")->comment('S/N');
            $table->string("spec")->comment('คุณสมบัติ');
            $table->string("usability")->comment('ประยุกต์ใช้งาน');
            $table->string("attribute")->comment('คุณลักษณะ');
            $table->string("description")->comment('รายละเอียด');
            $table->string("url")->comment('URL');
            $table->string("doc_no")->comment('เลขที่เอกสาร');
            $table->string("budget")->comment('วิธีได้มา');
            $table->string("out_stock_evidance")->comment('หลักฐานการจ่าย');
            $table->dateTime("waranty_start")->comment('เริ่มรับประกัน');
            $table->dateTime("waranty_end")->comment('สิ้นสุดรับประกัน');
            $table->unsignedBigInteger('categories_id')->comment('ประเภท')->nullable();
            $table->foreign('categories_id')->references('id')->on('asset_categories');
            $table->unsignedBigInteger('statuses_id')->comment('สถานะ')->nullable();
            $table->foreign('statuses_id')->references('id')->on('asset_statuses');
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
        Schema::dropIfExists('assets');
    }
}
