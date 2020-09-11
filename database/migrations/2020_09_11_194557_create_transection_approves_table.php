<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransectionApprovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transection_approves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form07_id')->nullable()->comment('รหัสฟอร์ม07');
            $table->string('list')->nullable()->comment('จำนวนรายการ');
            $table->dateTime('date_approves')->nullable()->comment('จำนวนรายการ');
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
        Schema::dropIfExists('transection_form07s');
    }
}
