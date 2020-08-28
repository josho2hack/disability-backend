<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id()                                    ->comment('รหัสไอดี');
            $table->foreignId('user_id')                    ->comment('รหัสผู้ใช้')
                ->constrained()->onDelete('cascade');
            $table->string('name')                          ->comment('ชื่อไฟล์');
            $table->text('cover_path')->nullable()          ->comment('พาท');
            $table->text('cover_name')->nullable()          ->comment('ชื่อไฟล์');
            $table->text('cover_link')->nullable()          ->comment('ลิงก์ไฟล์');
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
        Schema::dropIfExists('files');
    }
}
