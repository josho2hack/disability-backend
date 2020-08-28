<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_categories', function (Blueprint $table) {
            $table->id()                                        ->comment('รหัสผู้ใช้');
            $table->string('name')                              ->comment('ชื่อ');
            $table->string('slug')                              ->comment('ชื่อเรียก');
            $table->string('color')->nullable()                 ->comment('สี');
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
        Schema::dropIfExists('event_categories');
    }
}
