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
            $table->string("main_category")->comment('ประเภทหลัก');
            $table->string("second_category")->comment('ประเภทรอง');
            $table->string("name")->comment('ชื่อ');
            $table->enum('for_give',['ให้','ยืม'])->comment('ให้/ยืม');
            $table->binary("image")->comment('รูปภาพ');
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
