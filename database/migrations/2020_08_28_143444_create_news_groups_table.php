<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_groups', function (Blueprint $table) {
            $table->id()                                        ->comment('รหัสผู้ใช้');
            $table->string('name')                              ->comment('ชื่อ');
            $table->string('slug')                              ->comment('ชื่อเรียก');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_groups');
    }
}