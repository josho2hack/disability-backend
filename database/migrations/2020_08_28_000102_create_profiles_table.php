<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->comment('รหัส user');
            $table->string('house_no')->nullable()->comment('บ้านเลขที่');
            $table->string('village_no')->nullable()->comment('หมู่ที่');
            $table->string('lane')->nullable()->comment('ซอย');
            $table->string('sub_district')->nullable()->comment('ตำบล');
            $table->string('district')->nullable()->comment('อำเภอ');
            $table->string('province')->nullable()->comment('จังหวัด');
            $table->string('postal_code')->nullable()->comment('รหัสไปรษณีย์');
            $table->string('edu_place')->nullable()->comment('สถานที่ศึกษา');
            $table->string('tel')->nullable()->comment('เบอร์โทร');
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
        Schema::dropIfExists('profiles');
    }
}
