<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('events_id')->comment('กิจกรรม')
            ->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->comment('ผู้ใช้ที่ร่วมกิจกรรม')
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
        Schema::dropIfExists('events_users');
    }
}
