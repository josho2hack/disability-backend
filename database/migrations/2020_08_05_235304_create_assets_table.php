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
            $table->string("code")->nullable()->comment('เลขที่ครุภัณฑ์');
            $table->dateTime("received_date")->nullable()->comment('วันที่รับ');
            $table->string("serial_no")->nullable()->comment('S/N');
            $table->string("description",500)->nullable()->comment('รายละเอียด');
            $table->decimal("price")->nullable()->comment('ราคา');
            $table->string("budget")->nullable()->comment('วิธีได้มา');
            $table->string("doc_no")->nullable()->comment('เลขที่เอกสาร');
            $table->string("location")->nullable()->default('ทส.')->comment('ใช้ประจำที่');
            $table->string("out_stock_evidance")->nullable()->comment('หลักฐานการจ่าย');
            $table->dateTime("waranty_start")->nullable()->comment('เริ่มรับประกัน');
            $table->dateTime("waranty_end")->nullable()->comment('สิ้นสุดรับประกัน');
            $table->string("remark")->nullable()->comment('หมายเหตุ');
            $table->binary("image")->nullable()->comment('รูปภาพ');
            $table->string("url")->nullable()->comment('URL');

            $table->string("spec")->nullable()->comment('คุณสมบัติ');
            $table->string("usability")->nullable()->comment('ประยุกต์ใช้งาน');
            $table->string("attribute")->nullable()->comment('คุณลักษณะ');
            $table->string("version")->nullable()->comment('รุ่น');

            // $table->unsignedBigInteger('category_id')->comment('ประเภท')->nullable();
            // $table->foreign('category_id')->references('id')->on('asset_categories')
            //     ->constrained()->onDelete('set null');
            // $table->unsignedBigInteger('status_id')->comment('สถานะ')->nullable();
            // $table->foreign('status_id')->references('id')->on('asset_statuses')
            //     ->constrained()->onDelete('set null');

            $table->foreignId('asset_categories_id')->comment('ประเภท')->nullable()
                    ->constrained()->onDelete('set null');
            $table->foreignId('asset_statuses_id')->comment('สถานะ')->nullable()
                    ->constrained()->onDelete('set null');

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
