<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([
            [
                'email' => 'admin@local',
                'password' => bcrypt('password'),
                'first_name' => 'ผู้ดูแลระบบ',
                'last_name' => 'เครื่องมือผู้พิการ',
                'gender' => true,
                'active' => true,
                'email_verified_at' => now(),
                'citizen_id' => '1234567890123',
                'pwd_id' => '1234567890123'
            ],
            [
                'email' => 'audit@local',
                'password' => bcrypt('password'),
                'first_name' => 'ผู้ตรวจสอบ',
                'last_name' => 'เครื่องมือผู้พิการ',
                'gender' => true,
                'active' => true,
                'email_verified_at' => now(),
                'citizen_id' => '1234567890123',
                'pwd_id' => '1234567890123'
            ],
            [
                'email' => 'approve@local',
                'password' => bcrypt('password'),
                'first_name' => 'ผู้อนุมัติ',
                'last_name' => 'เครื่องมือผู้พิการ',
                'gender' => true,
                'active' => true,
                'email_verified_at' => now(),
                'citizen_id' => '1234567890123',
                'pwd_id' => '1234567890123'
            ],
            [
                'email' => 'user@local',
                'password' => bcrypt('password'),
                'first_name' => 'ผู้ใช้งาน',
                'last_name' => 'เครื่องมือผู้พิการ',
                'gender' => true,
                'active' => true,
                'email_verified_at' => now(),
                'citizen_id' => '1234567890123',
                'pwd_id' => '1234567890123'
            ],
        ]);

        DB::table('roles')->insert([
            [
                'name' => 'Admin'
            ],
            [
                'name' => 'Audit'
            ],
            [
                'name' => 'Approve'
            ],
            [
                'name' => 'User'
            ],
        ]);

        DB::table('disability_types')->insert([
            [
                'description' => "คนพิการทางการเห็น"
            ],
            [
                'description' => "คนพิการทางการได้ยินหรือสื่อความหมาย"
            ],
            [
                'description' => "คนพิการทางการเคลื่อนไหวหรือร่างกาย"
            ],
            [
                'description' => "คนพิการทางจิตใจหรือพฤติกรรม"
            ],
            [
                'description' => "คนพิการทางสติปัญญา"
            ],
            [
                'description' => "คนพิการทางการเรียนรู้"
            ],
            [
                'description' => "คนพิการทางออทิสติก"
            ],
        ]);
    }
}
