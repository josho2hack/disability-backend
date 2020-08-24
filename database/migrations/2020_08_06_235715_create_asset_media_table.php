<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_media', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('asset_id')->comment('อุปกรณ์และเครื่องมือ')->nullable();
            // $table->foreign('asset_id')->references('id')->on('assets')
            //     ->constrained()->onDelete('cascade');

            // $table->unsignedBigInteger('media_id')->comment('มัลติมีเดีย')->nullable();
            // $table->foreign('media_id')->references('id')->on('media')
            //     ->constrained()->onDelete('cascade');

            $table->foreignId('assets_id')->comment('อุปกรณ์และเครื่องมือ')
                ->constrained()->onDelete('cascade');
            $table->foreignId('media_id')->comment('มัลติมีเดีย')
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
        Schema::dropIfExists('asset_media');
    }
}
