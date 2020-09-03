<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePraticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pratices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->comment('รหัสผู้ใช้');
            $table->string('name')->nullable()->comment('ชื่อหลักสูตร');
            $table->unsignedBigInteger('main_groups_id')->nullable()->comment('กลุ่มหลัก');
            $table->unsignedBigInteger('sub_groups_id')->nullable()->comment('กลุ่มย่อย');
            $table->unsignedBigInteger('asset_categories_id')->nullable()->comment('อุปกรณ์');
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
        Schema::dropIfExists('pratices');
    }
}
