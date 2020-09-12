<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubGroupssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_groups', function (Blueprint $table) {
            $table->id();
            $table->string("name")->comment('ประเภทอุปกรณ์รอง');
            $table->string("icon")->nullable()->comment('icon แทน');
            $table->string("color")->nullable()->comment('สีพื้น icon');
            $table->string("image")->nullable()->comment('รูปภาพ');
            $table->timestamps();

            $table->foreignId('main_groups_id')->comment('ประเภทอุปกรณ์หลัก')->nullable()
            ->constrained()->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_sub_group_categories');
    }
}
