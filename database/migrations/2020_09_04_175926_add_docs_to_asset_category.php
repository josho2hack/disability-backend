<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDocsToAssetCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asset_categories', function (Blueprint $table) {
            $table->string("document")->nullable()->comment('คู่มือ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asset_categories', function (Blueprint $table) {
            $table->dropColumn('document');
        });
    }
}
