<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable()->comment('ยืนยันการสมัคร');
            $table->string('password')->comment('รหัสผ่าน');
            $table->string('first_name')->nullable()->comment('ชื่อ');
            $table->string('last_name')->nullable()->comment('นามสกุล');
            $table->boolean('gender')->nullable()->comment('เพศ');
            $table->string('avatar_name')->nullable()->comment('รูปใช้แทนผู้ใช้');
            $table->string('avatar_path')->nullable()->comment('ที่อยู่ของรูปที่ใช้แทน');
            $table->string('citizen_id')->nullable()->comment('เลขประชาชน');
            $table->string('pwd_id')->nullable()->comment('เลขผู้พิการ');
            $table->integer('timezone')->default(7)->comment('โซนเวลา');
            $table->boolean('active')->nullable()->comment('สถานะผู้ใช้งาน');
            $table->timestamp('last_login_at')->nullable()->comment('ล็อกอินครั้งสุดท้ายเมื่อ');
            $table->string('last_login_ip')->nullable()->comment('หมายเลขไอพีที่ใช้ล็อกอิน');
            $table->boolean('to_be_logged_out')->nullable()->comment('บังคับออกจากระบบหรือไม่');
            $table->rememberToken()->comment('จดจำค่าการล็อกอิน');
            $table->timestamps();
            $table->foreignId('disability_types_id')->nullable()->comment("ประเภทผู้พิการ")
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
        Schema::dropIfExists('users');
    }
}
