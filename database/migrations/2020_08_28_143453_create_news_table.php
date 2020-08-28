<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id()                                    ->comment('รหัสไอดี');
            $table->foreignId('user_id')                    ->comment('รหัสผู้ใช้')
                ->constrained()->onDelete('cascade');
            $table->foreignId('news_category_id')           ->comment('รหัสหมวดหมู่หลักสูตร')
                ->constrained()->onDelete('cascade');
            $table->foreignId('news_group_id')              ->comment('รหัสกลุ่มหลักสูตร')
                ->constrained()->onDelete('cascade');
            $table->string('title')                         ->comment('หัวข้อ');
            $table->text('description')                     ->comment('รายละเอียด');
            $table->boolean('is_publish')->default(0)       ->comment('เผยแพร่');
            $table->integer('view')->default(0)             ->comment('จำนวนเข้าดู');
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
        Schema::dropIfExists('news');
    }
}
