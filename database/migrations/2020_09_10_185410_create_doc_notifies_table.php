<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocNotifiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_notifies', function (Blueprint $table) {
            $table->id();
            $table->dateTime('notify_date')->nullable()->comment('วันที่แจ้งผล');
            $table->string('remark')->nullable()->comment('หมายเหตุ');
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
        Schema::dropIfExists('doc_notifies');
    }
}
