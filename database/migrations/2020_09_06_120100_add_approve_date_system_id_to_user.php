<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddApproveDateSystemIdToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string("system_id")->nullable()->comment('หมายเลขกำหนดของระบบ');
            $table->dateTime("approve_date")->nullable()->comment('วันที่อนุมัติ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('system_id');
            $table->dropColumn('appove_date');
        });
    }
}
