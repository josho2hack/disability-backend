<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('events_id')->comment('กิจกรรม')
            ->constrained()->onDelete('cascade');
            $table->foreignId('media_id')->comment('ไฟล์')
            ->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('events_media');
    }
}
