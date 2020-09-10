<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocGarunteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_garuntees', function (Blueprint $table) {
            $table->id();
            $table->string('office')->comment('หน่วยงาน');
            $table->string('city')->comment('จังหวัด');
            $table->string('remark')->nullable()->comment('หมายเหตุ');
            $table->string('image')->nullable()->comment('ภาพเอกสาร');
            $table->timestamps();
            $table->foreignId('doc_contracts_id')->nullable()->comment('สัญญา')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doc_garuntees');
    }
}
