<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm05sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form05s', function (Blueprint $table) {
            $table->id();
            $table->dateTime('print_date')->nullable()->comment('วันที่พิมพ์เอกสาร');
            $table->string('office')->nullable()->comment('หน่วยงาน');
            $table->string('city')->nullable()->comment('จังหวัด');
            $table->string('image')->nullable()->comment('ภาพเอกสาร');
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
        Schema::dropIfExists('form05s');
    }
}
