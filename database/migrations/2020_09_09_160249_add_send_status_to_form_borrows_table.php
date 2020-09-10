<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSendStatusToFormBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_borrows', function (Blueprint $table) {
            $table->enum('send_status',['0', '1'])->default(0)->comment('สถานะการส่ง')->after('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_borrows', function (Blueprint $table) {
            //
        });
    }
}
