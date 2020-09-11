<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransectionFormBorrows extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transection_form_borrows', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_id')->nullable()->comment('รหัสฟอร์ม');
            $table->string('form_type')->nullable()->comment('ชนิดฟอร์ม');
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
        Schema::dropIfExists('transection_form_borrows');
    }
}
