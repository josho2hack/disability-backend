<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('หัวข้อ');
            $table->text('description')->comment('รายละเอียด');
            $table->dateTime('start')->comment('วันที่เริ่ม');
            $table->dateTime('end')->comment('วันที่สิ้นสุด');
            $table->boolean('is_publish')->default(0)->comment('เผยแพร่');
            $table->string('office')->comment('หน่วยงาน');
            $table->string('city')->comment('จังหวัด');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('event_category_id')->comment('รหัสหมวดหมู่')
                ->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
