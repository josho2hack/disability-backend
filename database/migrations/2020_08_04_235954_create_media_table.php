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
            $table->string("description")->comment('รายละเอียด');
            $table->string("file_path")->comment('ที่อยู่ไฟล์');
            $table->string("file_name")->comment('ชื่อไฟล์');
            $table->string("file_ext")->comment('นามสกุลไฟล์');
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
