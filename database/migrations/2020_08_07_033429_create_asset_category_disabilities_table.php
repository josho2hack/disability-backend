<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetCategoryDisabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_category_disabilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asset_category_id')->comment('ประเภทอุปกรณ์และเครื่องมือ')->nullable();
            $table->foreign('asset_category_id')->references('id')->on('asset_categories')
                ->constrained()->onDelete('cascade');

            $table->unsignedBigInteger('disability_type_id')->comment('ประเภทผู้พิการ')->nullable();
            $table->foreign('disability_type_id')->references('id')->on('disability_types')
                ->constrained()->onDelete('cascade');

            // $table->foreignId('asset_categories_id')->comment('ประเภทอุปกรณ์และเครื่องมือ')
            //     ->constrained()->onDelete('cascade');
            // $table->foreignId('disability_types_id')->comment('ประเภทผู้พิการ')
            //     ->constrained()->onDelete('cascade');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_category_disabilities');
    }
}
