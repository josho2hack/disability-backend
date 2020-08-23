<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string("name")->comment('ชื่อ');
            $table->string("description")->nullable()->comment('รายละเอียด');
            $table->string("file_path")->nullable()->comment('ที่อยู่ไฟล์');
            $table->string("file_name")->nullable()->comment('ชื่อไฟล์');
            $table->string("file_ext")->nullable()->comment('นามสกุลไฟล์');
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
        Schema::dropIfExists('media');
    }
}
