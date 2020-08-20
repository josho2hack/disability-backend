<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_options', function (Blueprint $table) {
            $table->id();
            $table->boolean('first_name')->comment('ชื่อ')->default(false);
            $table->boolean('last_name')->default(false)->comment('นามสกุล');
            $table->boolean('gender')->default(false)->comment('เพศ');
            $table->boolean('avatar_name')->default(false)->comment('รูปใช้แทนผู้ใช้');
            $table->boolean('citizen_id')->default(false)->comment('เลขประชาชน');
            $table->boolean('pwd_id')->default(false)->comment('เลขผู้พิการ');
            $table->boolean('timezone')->default(false)->comment('โซนเวลา');
            $table->boolean('verify')->default(false)->comment('ยืนยันอีเมล์');
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
        Schema::dropIfExists('user_options');
    }
}
