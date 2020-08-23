<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_categories', function (Blueprint $table) {
            $table->id();
            $table->string("main_category")->nullable()->comment('ประเภทหลัก');
            $table->string("second_category")->nullable()->comment('ประเภทรอง');
            $table->string("name")->comment('ชื่อ');
            $table->string('description',500)->nullable()->comment('รายละเอียด');
            $table->enum('for_give',['ให้','ยืม'])->default('ยืม')->comment('ให้/ยืม');
            $table->binary("image")->nullable()->comment('รูปภาพ');
            $table->timestamps();
            $table->softDeletes()->comment('วันที่ลบข้อมูล');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_categories');
    }
}
